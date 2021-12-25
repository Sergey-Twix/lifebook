<?php
   session_start();
   require_once 'C:/wamp64/www/lab-2-PopovS/vendor/connect.php';

   $login = $_POST["login"];
   $password = $_POST["password"];
   $email = $_POST["email"];
   
   $check_users = mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'");
   echo mysqli_num_rows($check_users);

   if (mysqli_num_rows($check_users) > 0) {

       $user = mysqli_fetch_assoc($check_users);
       
       $_SESSION['user'] = [
           "id" => $user['id'],
           "full_name" => $user['full_name'],
           "email" => $user['email']
       ];
       header( 'Location: ../profile.php');
       
   } else {

       $_SESSION['message'] = 'Неверный логин или пароль';
       header( 'Location: ../index.php');

   }

?> 
