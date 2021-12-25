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
    <script src="js/wow.min.js"></script>
    <script>
      new WOW().init();
    </script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style/animate.css"> 
    <link rel="stylesheet" href="style/main.css">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/styleprof.css">
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

    <!-- <div class="container content">
        <div class="row">
            <div class="col-md-4">
                <div class="list-group">
                    <a href="#" class="list-group-item">Футболки</a>
                    <a href="#" class="list-group-item">Джинсы</a>
                    <a href="#" class="list-group-item">Брюки</a>
                    <a href="#" class="list-group-item">Платья</a>
                    <a href="#" class="list-group-item">Куртки</a>
                </div>
            </div>
        </div>
    </div> -->
    <section class = "catalog">
        <div action="../vendor/prof.php" class="wrapper_prof">
            <div class="card" style="width: 18rem;">
                <img src="<?= $_SESSION['shope']['avatar'] ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?= $_SESSION['shope']['title'] ?></h5>
                    <p class="card-text"><?= $_SESSION['shope']['description'] ?></p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>     
        </div>
    </section>
    <footer class="footer">
        <p>
            ©2020LifeBook
        </p>
    </footer>
    <script src="js/style.js"></script>
</body> 
</html>       