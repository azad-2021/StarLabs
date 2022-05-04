<?php      
    $host = "localhost";  
    $user = "root";  
    $password = '';  
    $db_1 = "b4_31490889_starlabs";

   $con = mysqli_connect($host, $user, $password, $db_1);  
   if(mysqli_connect_errno()) {  
      die("Failed to connect with MySQL: ". mysqli_connect_error());  
   }
?> 