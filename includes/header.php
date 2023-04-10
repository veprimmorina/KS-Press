<div class="header">
    <div class="inner_header">
            <div class="logo_container">
                <h1>KS-Press</h1>
            </div>
                <ul class="navigation">
                    <a href="../projektiphp/Ks-press.php"><li>Lajme</li></a>

                    <a href="../projektiphp/sport.php"><li>Sport</li></a>
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

