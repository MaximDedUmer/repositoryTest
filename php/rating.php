<?php include('server.php') ?>
<?php 
  session_start(); 
  $login_user = $_SESSION['login_user'];
// переход на страницу логина если если пользователь не авторизован
  if (!isset($_SESSION['login_user'])) {
    header("location: ../index.php?page=login");
}

// Выполним SELECT запрос из таблицы lessons
$resultLessons = mysqli_query($db, "SELECT 
                                        l.id_lesson,
                                        l.name_lesson,
                                        IF(ROUND(AVG(r.rating), 1) = ROUND(AVG(r.rating), 0), ROUND(AVG(r.rating), 0), ROUND(AVG(r.rating), 1)) AS average_rating
                                    FROM 
                                        lessons l
                                    JOIN 
                                        rating r ON l.id_lesson = r.id_lesson
                                    WHERE 
                                        r.id_user = (SELECT id_user FROM users WHERE login_user = '$login_user')
                                    GROUP BY 
                                        l.id_lesson, l.name_lesson;
                                ");


$lessonsRating = array(); // Создаем пустой массив для хранения данных о занятиях

// Перебираем результат выборки и добавляем данные в массив
while ($rowLessons = mysqli_fetch_assoc($resultLessons)) {
    $lessonsRating[] = $rowLessons;
}

?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/rating.css">
    <link rel="stylesheet" href="../css/all.css">
    <title>Оценки</title>

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
                    <a href="#" class="act">Личный кабинет▿</a>
                    <ul class="submenuAccordeon">
                        <li><a href="../index.php?page=profile">Профиль</a></li>
                        <li><a href="../index.php?page=work">Расписание</a></li>
                        <li><a href="../index.php?page=rating" class="act">Оценки</a></li>
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
                        <a href="../index.php?page=profile" class="act">Личный кабинет</a>
                        <ul class="sub-menu">
                            <li class="li-sub"><a href="../index.php?page=work">Расписание</a></li>
                            <li class="li-sub"><a href="../index.php?page=rating" class="act">Оценки</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <main class="main">
        <?php
            $lesson = mysqli_query($db, "SELECT * FROM lessons");
        ?>
        <div class="paper">
            <h1>Оценки</h1>
            <table>
                <thead>
                    <tr>
                        <th>Предмет</th>
                        <th>Средняя оценка</th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach ($lessonsRating as $lesson): ?>
                        <tr>
                            <td class="t1">
                                <a href="../index.php?page=moreRating&id_lesson=<?=$lesson['id_lesson']?>" class="rating">
                                    <?php echo $lesson['name_lesson']; ?>
                                </a> 
                            </td>
                            <td class="t2">
                                <a href="../index.php?page=moreRating&id_lesson=<?=$lesson['id_lesson']?>" class="rating">
                                    <?php echo $lesson['average_rating']; ?>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </main>

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
