<!DOCTYPE html>
<html>
    <style>
        body{
margin:0px;
}
#header
{
     
	width:100%;
    height:102px;
	float:left;
	text-align:center;
	background-color:#101010;
}
#logo
{
    margin-top:13px;
	width:30%;
	float:left;
}
#logo h1
{
	cursor:pointer;
	
	color:white;
	font-family:cambria;
}
#logo h1:hover
{
	color:black;
}

#menu
{
	float:left;
	width:70%;
}
#menu ul
{
    margin-top:13px;
	  margin-right: 10%;
	  padding: 0;
	  float:right;
	  text-align: center;
}
#menu a li{
	color: white;
    font-family: 'Montserrat';
    font-size: 18px;
}

#menu ul li
{
cursor:pointer;
list-style-type:none;
display:inline-block;
padding:8px;
}

#menu ul li a
{
	font-family:cambria;
text-decoration:none;
color:white;
font-size:20px;
}
#menu ul li a:hover
{
color:black;
}
@media only screen and (max-width: 590px) {
	#header
	{
		font-size:15px;
	}
	#logo
	{
		width:100%;
		float:left;
		text-align:center;
	}
	#menu
	{
		width:100%;
		margin: 0 auto;
	}
	#menu ul
	{
		float:none;
		margin-right:0px;
	}
}
@media only screen and (max-width: 320px) {
	#header
	{
		font-size:15px;
	}
	#logo h1
	{
		margin-bottom:1%;

	}
	  #menu ul li
	{
		display:block;
		
	}

	
	
 }
    </style>
	<head>
	
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=1">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="responsive.css">
	
<div id="header">
		<div id="logo">
			<h1>KS-Press</h1>
		</div>
	        <div id="menu">
		   <ul>
			<a ><li></li></a>
                    			
                    <a href="../sport.php"><li>Sport</li></a>
                    <a href="../projektiphp/ekonomi.php"><li>Ekonomi</li></a>
                    <a href="../projektiphp/shendeti.php"><li>Shendeti</li></a>
                    <a href="../projektiphp/index-admin.php" ><li>Admin</li></a>
                    
                    <?php
                
                    if(isset($_SESSION['name'])){
                        $name = $_SESSION['name'];
                        echo '<a><li>Miresevini ';
                        echo  $name;
                        echo '</li></a>';
                        
                        echo '<a><li>            
                        <form action="Ks-press.php" method="POST">
                        <button style="height:40px; background-color:red;" name="submit" type="submit" class="submit-btn">Log out</button>
                        </li></a>';
                        

                    }else{
                        echo '<a href="../projektiphp/login/login.php" ><li>Login</li></a>';
                        echo '<a href="../projektiphp/login/signup.php" ><li>Register</li></a>';
                    }

                    ?>

		   </ul>
         </div>

</div>

</html>