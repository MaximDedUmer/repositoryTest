<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/news.css">
    <link rel="stylesheet" href="../css/all.css">
    <title>Новости колледжа</title>
</head>
<body>
    <header class="header">
        <img class="burger-button" src="../imgs/бургер.svg">
        <nav class="burger-menu">
            <ul>
                <li><a href="../index.php?page=home">Главная</a></li>
                <li><a href="../index.php?page=about">О нас</a></li>
                <li><a href="../index.php?page=news" class="act">Новости</a></li>
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
                    <li class="li" ><a href="../index.php?page=home">Главная</a></li>
                    <li class="li"><a href="../index.php?page=about">О нас</a></li>
                    <li class="li"><a href="../index.php?page=news" class="act">Новости</a></li>
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

    <main class="main">
        <h2 class="section-title">Новости</h2>
        <section class="news">
        <?php
        $newsList = getNewsFromDB();
        foreach ($newsList as $newsItem) {
            echo '<div class="news-card">';
            echo '<h2>' . $newsItem['title'] . '</h2>';
            echo '<p>' . substr($newsItem['content'], 0, 30) . '... <a class="read-more" data-news="' . $newsItem['id'] . '" data-content="' . $newsItem['content'] . '" href="#">Читать полностью</a></p>';
            echo '</div>';
        }
        ?>
        </section>

    </main>

    <div class="overlay hidden">
        <div class="popup">
            <a class="close-popup" href="#">Закрыть</a>
            <div class="popup-content">
                <!-- Содержимое всплывающего окна будет добавлено с помощью JavaScript -->
            </div>
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
    <script src="../js/news.js"></script>
    <script src="../js/burger.js"></script>
</body>
</html>
