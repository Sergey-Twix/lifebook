<?php
   session_start();
   require_once 'C:/wamp64/www/Booking1/vendor/connect.php';

   $avatar= $_POST["avatar"];
   $title = $_POST["title"];
   $description = $_POST["description"];
   
   $check_shope = mysqli_query($connect, "SELECT * FROM `hous` WHERE `avatar` = '$avatar' AND `title` = '$title' AND `description` = 'description'");
   if (mysqli_num_rows($check_hous) > 0) {

       $check_shope = mysqli_fetch_assoc($check_shope);
       
       $_SESSION['shope'] = [
           "id" => $hous['id'],
           "avatar" => $hous['avatar'],
           "title" => $hous['title'],
           "description" => $hous['description']
       ];
       header( 'Location: ../profile.php');
       
   } else {

       $_SESSION['message'] = 'Неверный логин или пароль';
       header( 'Location: ../index.php');

   }
?>