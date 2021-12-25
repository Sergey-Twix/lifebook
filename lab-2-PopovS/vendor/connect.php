

<?php
   $servername = "localhost"; 
   $username = "root";  
   $password = "";
   $database = "lab-2-popovs";

   $connect = mysqli_connect($servername, $username, $password, $database);

   if (!$connect) {
    die('Error connect to Database!');
  }
?>