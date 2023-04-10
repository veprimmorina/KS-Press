<?php

session_start();
require("../includes/dbconnect.php"); ?>

<?php
if(isset($_GET['id']) && isset($_GET['typelajme'])){

    $deleteNewsFrom = "DELETE FROM $_GET[typelajme] WHERE id = $_GET[id] ";

    $deleteNews = mysqli_query($pdo, $deleteNewsFrom);

 $_SESSION['msg'] = ('Deleted successfully');

header('Location: addLajme.php');

}else{
    $_SESSION['msg'] = ('not Deleted, there was an error');

    header('Location: addLajme.php');
}