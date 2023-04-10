<?php
session_start();
require '../includes/dbconnect.php';


if(isset($_GET['id'])){

    $lajme = "SELECT * FROM $_GET[typelajme] WHERE id = $_GET[id] ";

    $query = mysqli_query($pdo , $lajme);

    while($row = mysqli_fetch_row($query)){

        $titulli =              $row[1];
        $pershkrimi =                   $row[2];
        $imgPhoto =       $row[3];
    }
}


if(isset($_POST['update'])){

    $titulli = $_POST['titulli'];
    $pershkrimi = $_POST['pershkrimi'];
    
    $imgPhoto = $_FILES['imgPhoto']['name'];
    $imgPhotoTemp = $_FILES['imgPhoto']['tmp_name'];
  
    if(empty($imgPhoto)){

    $edit_news = "UPDATE $_GET[typelajme] SET titulli = '{$titulli}' , pershkrimi =  '{$pershkrimi}' WHERE  id = {$_GET[id]}";

    }else{
        move_uploaded_file($imgPhotoTemp , "../images/" . $imgPhoto);
        $edit_news = "UPDATE $_GET[typelajme] SET titulli = '{$titulli}' , pershkrimi =  '{$pershkrimi}' , img =  '{$imgPhoto}' 
        WHERE  id = {$_GET[id]}";

    }
  
    

  $update = mysqli_query($pdo, $edit_news);
  
  if($update){
      $_SESSION['msg'] = "Updated succesfully";
  }else{
    $_SESSION['msg'] = "error: " . mysqli_error($update);
  }

  header('Location:addLajme.php');
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
    
<h3 >Edit product</h3>

<form action="" method="post" enctype="multipart/form-data">
    <label for="titulli">Titulli </label>
        <input type="text" name="titulli" value="<?php echo $titulli; ?>">  

        <label for="pershkrimi">Pershkrimi</label>
        <textarea name="pershkrimi"  cols="30" rows="8" ><?php echo $pershkrimi; ?></textarea>
    
        <label for="imgPhoto">img</label>
        <input type="file" name="imgPhoto">  
        <img width="100" src="../images/<?php echo $imgPhoto; ?> " alt="PhotoNews">  
    
     <input type="submit" name="update" value="update">
     

</form>


</body>
</html>