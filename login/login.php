<?php
    session_start();
    if(isset($_SESSION['user_id'])){
        header("Location: ../Ks-press.php");
    }
  
    require '../includes/dbconnect.php';
  
    if(isset($_POST['submit'])):
      $email = $_POST['email'];
      $password = $_POST['password'];
      
      $tryToLogin ="SELECT * FROM users WHERE email = '{$email}'  AND password = '{$password}' ";

      $query = mysqli_query($pdo, $tryToLogin);

      if( mysqli_num_rows($query) == 0 ){
        echo "Fjalkalimi ose emaili gabim";
      }
      else{
        
        while($getUserInfo = mysqli_fetch_row($query)){
            $_SESSION['user_id'] = $getUserInfo[0];
            $_SESSION['name'] = $getUserInfo[1];
            $_SESSION['roli']= $getUserInfo[4];

    }
        
       header("Location: ../Ks-press.php");
     
    }
    endif;
?>

<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="../css/loginstyle.css">
    <link rel="stylesheet" type="text/css" href="../css/kspress-style.css">
</head>
<body>

<!---- Header includes ---->
<?php require '../includes/header.php'; ?>

<div>


    <div class="hero">
        <div class="form-box">
            <div class="button-box">
                <div id="btn"></div>
                <button type="button" class="toggle-btn" onclick="login()">Login</button>
                <!--<button type="button" class="toggle-btn" onclick="register()">Register</button> -->
            </div>
            <div class="social-icons">
                <img src="../images/fb-login.png">
                <img src="../images/tw-login.png">
                <img src="../images/google-fb.png">
            </div>

            <script type="text/javascript" src="../js/loginjs.js"></script>
            


            <form id="login" class="input-group" action="login.php" name="myForm" onsubmit="return(validateLogIn())" method="POST">
                <input type="email" class="input-field" name="email" value="" placeholder="Email">
                <input type="password" class="input-field" name="password" placeholder="Password">
                <input type="checkbox" class="chech-box"><span>Remember Password</span>
                                
              <button name="submit" type="submit" class="submit-btn">Log in</button>
            </form>
        </div>
<div>
    <?php include '../includes/footer.php'; ?>
    
</div>
    </div>
    <script>
        var x = document.getElementById("login");
        var y = document.getElementById("register");
        var z = document.getElementById("btn");

        function register(){
            x.style.left = "-400px"
            y.style.left = "50px"
            z.style.left = "110px"
        }
        function login(){
            x.style.left = "50px"
            y.style.left = "450px"
            z.style.left = "0px"
        }
    </script>
</div>


</body>
</html>