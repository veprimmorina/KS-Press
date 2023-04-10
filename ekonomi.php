<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" type="text/css" href="css/kspress-style.css">
    <title>EKONOMIA * KS-PRESS</title>
    
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
                        <img src="https://telegrafi.com/wp-content/uploads/2020/06/trusti-780x439.jpg" id="image-heading"/>
                    </div>
                        <h2><a href="#">Qeveria e Kosovës me projektligj rreth tërheqjes së kursimeve nga Trusti</a></h2>
                </article>

                </div>
                </div>
        </div>
       

        <div class="index-news">
           <div class="wrapper">
               
        
           <?php

require 'includes/dbconnect.php';

$allNews = query('SELECT * FROM ekonomia');

while ($row = fetch_array($allNews)){
    
//    echo $row['titulli'];

    $ekonomia = <<<STRINGA_PDT

    <article>
    <div class="news-img">
        <img class="news-image" src="images/{$row['img']}" />
    </div>
        <h3>{$row['titulli']}</h3>
        <p>{$row['pershkrimi']}</p>
    
    </article>




STRINGA_PDT;

echo $ekonomia;

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