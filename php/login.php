<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="../css/all.css">
    <title>ЮУГТК - Вход</title>
</head>
<body>
    <header class="header">
        <img class="burger-button" src="../imgs/бургер.svg">
        <nav class="burger-menu">
            <ul>
                <li><a href="../index.php?page=home">Главная</a></li>
                <li><a href="../index.php?page=about">О нас</a></li>
                <li><a href="../index.php?page=news">Новости</a></li>
                <li class="accordion">
                    <a href="#">Абитуриентам▿</a>
                    <ul class="submenuAccordeon">
                        <li><a href="../index.php?page=work">Поступление</a></li>
                        <li><a href="../index.php?page=work">Специальности</a></li>
                        <li><a href="../index.php?page=work">Общежитие</a></li>
                        <li><a href="../index.php?page=work">Онлайн заявление</a></li>
                    </ul>
                </li>
                <li><a href="../index.php?page=work">Сотрудникам</a></li>
                <li><a href="../index.php?page=work">Контакты</a></li>
                <li class="accordion">
                    <a href="#">Личный кабинет▿</a>
                    <ul class="submenuAccordeon">
                        <li><a href="../index.php?page=profile">Профиль</a></li>
                        <li><a href="../index.php?page=work">Расписание</a></li>
                        <li><a href="../index.php?page=rating">Оценки</a></li>
                    </ul>
                </li>
            </ul>
        </nav>

        <div class="widthContainer">
            <nav class="menu">
                <ul>
                    <li class="li" ><a href="../index.php?page=home" >Главная</a></li>
                    <li class="li"><a href="../index.php?page=about">О нас</a></li>
                    <li class="li"><a href="../index.php?page=news">Новости</a></li>
                    <li class="submenu li">
                        <a href="#">Абитуриентам</a>
                        <ul class="sub-menu">
                            <li class="li-sub"><a href="../index.php?page=work">Поступление</a></li>
                            <li class="li-sub"><a href="../index.php?page=work">Специальности</a></li>
                            <li class="li-sub"><a href="../index.php?page=work">Общежитие</a></li>
                            <li class="li-sub"><a href="../index.php?page=work">Онлайн заявление</a></li>
                        </ul>
                    </li>
                    <li class="li"><a href="../index.php?page=work">Сотрудникам</a></li>
                    <li class="li"><a href="../index.php?page=work">Контакты</a></li>

                    <li class="submenu li">
                        <a href="../index.php?page=profile">Личный кабинет</a>
                        <ul class="sub-menu">
                            <li class="li-sub"><a href="../index.php?page=work">Расписание</a></li>
                            <li class="li-sub"><a href="../index.php?page=rating">Оценки</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    
    <div class="body">
        <div class="login-container">
            <h1>Авторизация</h1>
            <form id="loginForm" method="post" action="../index.php?page=login">
                <?php include('errors.php'); ?>
                <div class="input-group">
                    <label>Логин</label>
                    <input type="text" name="login_user" required>
                </div>
                <div class="input-group">
                    <label>Пароль</label>
                    <input type="password" name="password_user" required>
                </div>
                <div class="input-group">
                    <button type="submit" class="but-new" name="login_user_but">Войти</button>
                </div>
            </form>
        </div>
    </div>

    <footer class="footer">
        <div class="widthContainer">
            <div class="footer-logo">
                <img src="../imgs/logo.svg" alt="Логотип колледжа">
            </div>
            <p>&copy; 2023 ГБПОУ “Южно-Уральский государственный технический колледж”</p>
        </div>    
    </footer>
    <script src="../js/burger.js"></script>
</body>
</html>