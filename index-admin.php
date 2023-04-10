<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/kspress-style.css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>


<body>

<?php

session_start();

require 'includes/header.php';

if(isset($_SESSION['roli'])){

if($_SESSION['roli'] == 0){


    echo "<h1>YOU ARE NOT AUTH TO LOG IN THIS PAGE</h1>";
    require 'includes/footer.php';
    die();
}
}else{
    echo "<h1>YOU NEED TO BE LOGGED IN FIRST</h1>";
    require 'includes/footer.php';
    die();

}


?>


<h1>
IF YOU ARE HERE IT MEANS THAT YOU ARE AN ADMIN AND YOU CAN ADD, DELETE, MODIFY NEWS OR PHOTOS.
HAVE FUN!
</h1>

<ul>

<a href="admin/addLajme.php?lajmeFace=lajme">ADD LAJME </a><br>
<a href="admin/addLajme.php?lajmeFace=ekonomia">ADD EKONOMI </a><br>
<a href="admin/addLajme.php?lajmeFace=shendeti">ADD SHENDETI </a><br>
<a href="admin/addLajme.php?lajmeFace=sport">ADD SPORT </a><br>
<a href="admin/changeUsers.php">CHANGE SUPER USERS </a>

</ul>

<?php
require 'includes/footer.php';
?>
</body>


</html>