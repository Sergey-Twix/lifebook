<?php

    session_start();
    require_once 'C:/wamp64/www/lab-2-PopovS/vendor/connect.php';



    $full_name = $_POST["full_name"];
    $login = $_POST["login"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $password_confirm = $_POST["password_confirm"];

    mysqli_query($connect, $query = "INSERT INTO `users` (`id`, `full_name`, `login`, `email`, `password`) VALUES (NULL,'{$full_name}','{$login}','{$email}','{$password}')");
    if ($password === $password_confirm) {
      
      $password = md5($password);

      $_SESSION['message'] = 'Регистрация прошла успешно';
      header( 'Location: ../index.php');


    } else {
       $_SESSION['message'] = 'Пароли не совпадают';
       header( 'Location: ../register.php');
    }


?>
