<?php
   session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LifeBook</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@900&family=Open+Sans&family=Ubuntu:wght@400;700&display=swap" rel="stylesheet">
    <script>
       new WOW().init();
    </script>
    <link rel="stylesheet" href="style/animate.css"> 
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/main.css">
</head>
<body>
    <header class="header" id="header">
            <div class="menu">
                <div class="wrapper">
                    <div class="logo">
                        <img src="https://pngicon.ru/file/uploads/Book3.png" alt="logo" width="60" height="60">
                    </div>
                    <ul class="ul" id="ul">
                         <li><a href="#links" class="click1" id="click1">главная</a></li>
                         <li><a href="#information" class="click1" id="click1">о нас</a></li>
                         <li><a href="#emptiness" class="click1" id="click1">плюсы</a></li>
                         <li><a href="#document" class="click1" id="click1">форма</a></li>
                    </ul>
                </div>
            </div>
    </header>

    <section class="links" id="links">
        <div class="wrapper wow animated fadeInLeft">
            <h1>Лучше чем просто книга</h1>
            <h3>Перестань тратить время на бесполезные вещи<br> и начни получать удовольствие от текстов</h3>
            <div class="bt">
                <a href="#" class="click open-popup1" id="click">Войти</a> 
                <a href="#" class="click open-popup2" id="click">Регистрация</a> 
            </div>
        </div>
        <div class="popup-bg">
            <div class="popup">
                <img class= "close-popup" src="https://img.icons8.com/ios/24/000000/multiply.png" alt="icon"> 
                <!-- Форма авторизации -->
                <form action="../vendor/signin.php" method="post">
                    <label for="">Логин</label>
                    <input type="text" name="login" placeholder="Введите свой логин">
                    <label for="">Пароль</label>
                    <input type="password" name="password" placeholder="Введите свой пароль">
                    <label for="">email</label>
                    <input type="email" name="email" placeholder="Введите свой Email">
                    <button type="submit">Войти</button><br><br>
                    <p>
                        У вас нет аккаунта? <a href="/index.php">Зарегистрируйтесь</a>
                    </p>
                    <?php 
                        if ($_SESSION['message']) {
                        echo  '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
                        }        
                        unset ($_SESSION['message']); 
                    ?>
                </form> 
            </div>       
        </div>  
        <div class="popup-gb">
            <div class="popup">
                <img class= "close-popup" src="https://img.icons8.com/ios/24/000000/multiply.png" alt="icon"> 
                <!-- Форма регистрации -->
                <form action="../vendor/reg.php" method="post" enctype="multipart/form-data">
                    <label for="">ФИО</label>
                    <input type="text" name="full_name" placeholder="Введите своё ФИО">
                    <label for="">Логин</label>
                    <input type="text" name="login" placeholder="Введите свой логин">
                    <label for="">Почта</label>
                    <input type="email" name="email" placeholder="Введите адрес своей электронной почты">
                    <label for="">Пароль</label>
                    <input type="password" name="password" placeholder="Введите свой пароль">
                    <label for="">Подтверждение пароля</label>
                    <input type="password" name="password_confirm" placeholder="Введите свой пароль">
                    <button type="submit">Зарегистрироваться</button><br><br>
                    <p>
                        У вас уже есть аккаунт? <a href="/index.php">Авторезируйтесь</a>
                    </p>
                    
                    <?php 
                    if ($_SESSION['message']) {
                        echo  '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
                    }        
                        unset ($_SESSION['message']); 
                    ?>
                    
                </form>     
        </div>  
    </section>
    <section class="wall" id="wall">
        <div class="wrapper">
            <div class="wall0 wall1 wow animated fadeIn">
                <h3>Множество различных произведений</h3>
                <h4>_____________________</h4>
                <p>Выбирайте различные произведения из разных направлений и времён</p>
            </div>
            <div class="wall0 wall2 wow animated fadeIn">
                <h3>Подходит для студентов</h3>
                <h4>__________________________</h4>
                <p>Здесь можно найти любой учебник для любого предмета. Студент будет счастлив</p>
            </div>
            <div class="wall0 wall3 wow animated fadeIn">
                <h3>10 книг = скидка 30%</h3> 
                <h4>___________________________</h4>
                <p>После 10 успешно выполненных заданий вы получите скидку 30% на любую книгу из раздела для физики</p>
            </div>
        </div>
    </section>        
        <section class="information" id="information">
            <div class="wrapper2">
                <h1>О нас</h1>
                <div class="inf0">
                    <div class="block-top wow animated fadeInUp">
                        <p class="inf1">Вот уже на протяжении более 3-х лет наша компания помогает другим людям получать более доступно любимые книги</p>
                        <img src="https://images.unsplash.com/photo-1530686350401-7de25243dd89?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1051&q=80" alt="book" width="650" height="487.5">
                    </div>
                    <div class="block-bottom wow animated fadeInUp">
                        <img src="https://images.unsplash.com/photo-1486312338219-ce68d2c6f44d?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1052&q=80g" alt="book" width="650" height="487.5">
                    </div>
                </div>
            </div>
        </section>    
    <section class="level">
    <footer class="footer">
        <p>
            ©2020LifeBook
        </p>
    </footer>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.6.0.min.js"></script>
    <script src="js/style.js"></script>
    <script src="js1/main.js"></script>
</body> 
