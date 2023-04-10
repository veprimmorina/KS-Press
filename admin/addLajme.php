<?php
session_start();
require '../includes/dbconnect.php';

if(isset($_GET['lajmeFace'])){
    $lajmeFace = $_GET['lajmeFace'];
    $_SESSION['lajmeFaceSess'] = $lajmeFace;
}else{
    $lajmeFace = $_SESSION['lajmeFaceSess'];
}


if(isset($_POST['addnews'])){

    $titulli = $_POST['titulli'];
    $pershkrimi = $_POST['pershkrimi'];
    $imgNews = $_FILES['imgPhoto']['name'];
    $imgTemp = $_FILES['imgPhoto']['tmp_name'];
    move_uploaded_file($imgTemp , "../images/" . $imgNews);
  
    $addNews = "INSERT INTO $lajmeFace(titulli , pershkrimi, img) VALUES('{$titulli}' , '{$pershkrimi}' , '{$imgNews}')";

    $newNews = mysqli_query($pdo, $addNews);

    if($newNews){
        $_SESSION['msg'] = "News added successfully in " . $lajmeFace;
    }else{
        $_SESSION['msg'] = "News not added in " . $lajmeFace . ", there was an error: " . mysqli_error($newNews);
    }

  header('refresh: 0;');

}else{
  //  echo "THERE IS SOMETHING MISSING OR THERE IS A PROBLEM WITH THE DATABASE";
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
$queryforlajme = "SELECT * FROM $lajmeFace";
$lajmet = mysqli_query($pdo , $queryforlajme);

if(isset($_SESSION['msg'])){
    echo $_SESSION['msg'];
    echo "<br>";
    echo "<br>";
}


while($row = mysqli_fetch_row($lajmet)){

    $pdt_in_admin = <<< STRINGA
<tr>
<td>{$row[0]}</td>
<td>{$row[1]}</td>
<td>{$row[2]}</td>
<td><img src="../images/{$row[3]}" alt="" style="width:25%"></td>

<td><a href="editNews.php?id={$row[0]}&typelajme=$lajmeFace" role="button">Edit</a></td>
<td><a href="deleteNews.php?id={$row[0]}&typelajme=$lajmeFace" role="button">Delete</a></td>

</tr>

STRINGA;
echo  $pdt_in_admin;

}

?>

<br>
<br>

<h2>ADD LAJME</h2>
</table>

<form action="" method="post" enctype="multipart/form-data" >
    <label for="nome">Titulli </label>
        <input type="text" name="titulli" class="form-control">  
           <label for="pershkrimi">Pershkrimi</label>
        <textarea name="pershkrimi"  cols="30" rows="8" ></textarea>
    
        <label for="imgPhoto">Foto</label>
        <input type="file" name="imgPhoto">  
    
     <input type="submit" name="addnews"  value="ADD news">

</form>


</body>

</html>