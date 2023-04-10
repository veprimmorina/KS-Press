<?php
    session_start();
    if(isset($_POST['submit'])){
        session_destroy();
        $index = "Ks-press.php";
        header("Refresh:0; url=$index");

    }

?>


<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" type="text/css" href="css/kspress-style.css">
        
    <title>KS-PRESS</title>
    
    </head>
    <body>

<!---- Header includes ---->
<?php 
    include 'includes/headeri.php'; 
?>
<?php
   include 'includes/slideri.php';
?>

 

<!-- Full-width images with number and caption text -->







       <!-- <div class="index">
            <div class="news-wrapper">
                <article>
                    <div class="heading-news-img">
                        <img src="https://www.gazetaexpress.com/wp-content/uploads/2020/05/usa-1536x1024-1-600x360.jpg" id="image-heading"/>
                    </div>
                        <h2><a href="#">Te shtunen testohen per Covid-19 edhe 23 zyrtare policore ne Prizren</a></h2>
                </article>
                

                </div>
            </div>
        </div> -->
       

       <div class="index-news">
           <div class="wrapper">


           <?php

require 'includes/dbconnect.php';

$allNews = query('SELECT * FROM lajme');

while ($row = fetch_array($allNews)){
    
//    echo $row['titulli'];

    $lajme = <<<STRINGA_PDT

    <article>
    <div class="news-img">
        <img class="news-image" src="images/{$row['img']}" />
    </div>
        <h3>{$row['titulli']}</h3>
        <p>{$row['pershkrimi']}</p>
    
    </article>

STRINGA_PDT;

echo $lajme;

}

    function query($sql){
        global $pdo;
        return mysqli_query($pdo , $sql);
        }
        

        function fetch_array($result){
            return mysqli_fetch_array($result);
        }

    ?>
        </div>
    </div>

    <?php include 'includes/footerii.php'; ?>
    
    </div>



    </body>
</html>