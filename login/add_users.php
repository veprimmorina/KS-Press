<?php
session_start();

require '../includes/dbconnect.php';

 if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];

    $sql="INSERT INTO users (name,email,password,roli) VALUES('$name','$email','$password', '0')";
   
    $addUser = mysqli_query($pdo, $sql);

    if($addUser){
       echo "New user added";
    }

 }
?>

<div class="container">
 <form action="add_users.php" method="POST">
 Emri:
 <input type="text" name="name" placeholder="Shkruaj emrin tuaj">
 email:
 <input type="email" name="email" placeholder="Shkruaj emrin tuaj">
 Passwordi:
 <input type="password" name="password">
<!--
<input type="hidden" name="added_by" value="<?php echo $_SESSION['name']; ?> ">
-->

 <input type="submit" name="submit" value="Dergo">
 </form>
</div>

<?php   
   //header("Location: users.php");
?>