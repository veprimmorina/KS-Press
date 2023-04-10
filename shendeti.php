<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" type="text/css" href="css/kspress-style.css">
    <title>SHENDETI * KS-PRESS</title>
    
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
                        <img src="https://www.gazetaexpress.com/wp-content/uploads/2020/07/file-20200422-47794-5rc7q7-600x360.jpg" id="image-heading"/>
                    </div>
                        <h2><a href="#">Gratë shtatzëna janë 5 herë më të rrezikuara të shtrihen në spital nga Covid-19 në krahasim me të tjerat</a></h2>
                </article>

                </div>
                </div>
        </div>
       

       <div class="index-news">
           <div class="wrapper">
               
        
           <?php

require 'includes/dbconnect.php';

$allNews = query('SELECT * FROM shendeti');

while ($row = fetch_array($allNews)){
    
//    echo $row['titulli'];

    $shendeti = <<<STRINGA_PDT

    <article>
    <div class="news-img">
        <img class="news-image" src="images/{$row['img']}" />
    </div>
        <h3>{$row['titulli']}</h3>
        <p>{$row['pershkrimi']}</p>
    
    </article>




STRINGA_PDT;

echo $shendeti;

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