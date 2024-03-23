<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/home.css">
    <link rel="stylesheet" href="../css/all.css">
    <title>ЮУГТК - Главная</title>
</head>
<body>
    <header class="header">
        <img class="burger-button" src="../imgs/бургер.svg">
        <nav class="burger-menu">
            <ul>
                <li><a href="../index.php?page=home" class="act">Главная</a></li>
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
                    <li class="li" ><a href="../index.php?page=home" class="act">Главная</a></li>
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
    <section class="content">
        <div class="college-info">
            <div class="widthContainer college-info">
                <div class="college-info-text" >
                    <h1>ГБПОУ “Южно-Уральский государственный технический колледж”</h1>
                </div>
                <div class="college-info-image">
                    <img src="../imgs/logo-name.png" alt="Логотип колледжа">
                </div>
            </div>    
        </div>

        <div class="news" align="center">
            
                <h2>Последние новости</h2>
                <div class="carousel">
                    <div class="carousel-container">
                        <div class="carousel-slide">
                            <img src="https://dummyimage.com/1000x400" alt="Новость 1">
                        </div>
                        <div class="carousel-slide">
                            <img src="https://dummyimage.com/1000x400" alt="Новость 2">
                        </div>
                        <div class="carousel-slide">
                            <img src="https://dummyimage.com/1000x400" alt="Новость 3">
                        </div>
                        <div class="carousel-slide">
                            <img src="https://dummyimage.com/1000x400" alt="Новость 4">
                        </div>
                    </div>
                </div>           

                <div class="carousel-buttons">
                    <button class="prev-button">Предыдущая</button>
                    <button class="next-button">Следующая</button>
                </div>
               
        </div>

        <div class="reasons" align="center">
            <div class="widthContainer">
                <h2>Почему выбирают нас ?</h2>
                <div class="reasons-columns">
                    <div class="reason-column">
                        <div class="reason">
                            <h3>Лучшие преподаватели</h3>
                            <img src="../imgs/prepods.jpg" alt="Лучшие преподаватели">
                        </div>
                        <div class="reason">
                            <h3>Множество специальностей</h3>
                            <img src="../imgs/spec.jpg" alt="Множество специальностей">
                        </div>
                    </div>
                    <div class="reason-column">
                        <div class="reason">
                            <h3>Связи с работодателями</h3>
                            <img src="../imgs/svyaz.png" alt="Связи с работодателями">
                        </div>
                        <div class="reason">
                            <h3>Множество клубов и мероприятий</h3>
                            <img src="../imgs/activ.jpg" alt="Множество клубов и мероприятий">
                        </div>
                    </div>
                </div>
            </div>    
        </div>

        <div class="subscribe" align="center">
            <div class="widthContainer">
                <h2>Подписаться на рассылку</h2>
                <p>Получайте наши обновления и новости прямо в вашу почту.</p>
                <form id="subscribe-form">
                    <input type="email" placeholder="Введите вашу почту" required>
                    <button type="submit">Подписаться</button>
                </form>
            </div>
        </div>
    </section>
    <footer class="footer">
        <div class="widthContainer">
            <div class="footer-logo">
                <img src="../imgs/logo.svg" alt="Логотип колледжа">
            </div>
          
            <p>&copy; 2023 ГБПОУ “Южно-Уральский государственный технический колледж”</p>
        </div>    
    </footer>
    <script src="../js/home.js"></script>
</body>
</html>
