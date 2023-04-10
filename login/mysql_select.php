<?php
 require '../includes/dbconnect.php';

 $sql="SELECT * from users";
 if($result = mysqli_query($pdo, $sql)){

    echo "<table border = '1' >";
    echo "<tr>";
       echo "<th>id</th>"; 
       echo "<th>name</th>"; 
       echo "<th>email</th>"; 
       echo "<th>password</th>";
       while($row= mysqli_fetch_array($result)){
           $id = $row['id'];
           $name = $row['name'];
           $email = $row['email'];
           $password = $row['password'];
         
           echo "<tr>";
           echo "<td> '$id' . </td>";
           echo "<td> '$name' . </td>";
           echo "<td> '$email' . </td>";
           echo "<td> '$password' . </td>";
           echo "</tr>";
       } 
       echo "</table>";
 }else{
     echo "Nuk ka te dhena";
 }

?>