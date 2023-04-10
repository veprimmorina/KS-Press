<?php

session_start();
require '../includes/dbconnect.php';


if(isset($_GET['id'])){

        $roliToGet =0;

    if($_GET['roliUser'] ==0){
        $roliToGet = 1;
    }else{
        $roliToGet = 0;
    }

    $userId = $_GET['id'];
    $edit_user = "UPDATE users SET roli = {$roliToGet}  WHERE  id = {$userId}";

    $update = mysqli_query($pdo, $edit_user);
  
    if($update){
        $_SESSION['msgRoli'] = "Updated Roli succesfully";
    }else{
      $_SESSION['msgRoli'] = "error to change Roli";
    }
  
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>

<a href="../Ks-press.php"><h2>SEE YOUR WEBPAGE</h2></a>

<table>

<?php
$queryforUsers = "SELECT * FROM users";
$users = mysqli_query($pdo , $queryforUsers);

if(isset($_SESSION['msgRoli'])){
    echo $_SESSION['msgRoli'];
    echo "<br>";
    echo "<br>";
}


while($row = mysqli_fetch_row($users)){

    $pdt_in_admin = <<< STRINGA
    

    <tr>
<td>Emri: {$row[0]}</td>
<td>Mbiemri: {$row[1]}</td>
<td>Email: {$row[2]}</td>
<td style="color:red;">roli: {$row[4]}</td>
<td><a href="changeUsers.php?id={$row[0]}&roliUser={$row[4]}" role="button">Change roli</a></td>

</tr>

STRINGA;
echo  $pdt_in_admin;

}

?>

</body>

</html>