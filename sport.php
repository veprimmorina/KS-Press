<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" type="text/css" href="css/kspress-style.css">
    <title>SPORT * KS-PRESS</title>
    
    </head>
    <body>

<!---- Header includes ---->
<?php 
    session_start();
    include 'includes/headeri.php'; 
    
?>

      
        <div class="index">
            <div class="news-wrapper">
                <article>
                    <div class="heading-news-img">
                        <img src="https://www.gazetaexpress.com/wp-content/uploads/2020/07/achraf-600x360.jpg" id="image-heading"/>
                    </div>
                        <h2><a href="#">Reali i ‘verbuar’, çfarë ka humbur me shitjen e Achraf</a></h2>
                </article>

                </div>
                </div>
        </div>
       

        <div class="index-news">
           <div class="wrapper">
               
        
           <?php

require 'includes/dbconnect.php';

$allNews = query('SELECT * FROM sport');

while ($row = fetch_array($allNews)){
    
//    echo $row['titulli'];

    $sport = <<<STRINGA_PDT

    <article>
    <div class="news-img">
        <img class="news-image" src="images/{$row['img']}" />
    </div>
        <h3>{$row['titulli']}</h3>
        <p>{$row['pershkrimi']}</p>
    
    </article>




STRINGA_PDT;

echo $sport;

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