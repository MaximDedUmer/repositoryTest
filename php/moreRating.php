<?php include('server.php') ?>
<?php 
  session_start(); 
  $login_user = $_SESSION['login_user'];
// переход на страницу логина если если пользователь не авторизован
  if (!isset($_SESSION['login_user'])) {
    header("location: ../index.php?page=login");
}

?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/all.css">
    <link rel="stylesheet" href="../css/rating.css">
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
            <div class="paper2">
                <table>
                    <thead>
                        <tr>
                            <th colspan="3">
                                <?php
                                // Получаем id_lesson из параметра запроса
                                $id_lesson = $_GET['id_lesson'];
                                $query = "SELECT name_lesson FROM lessons WHERE id_lesson = $id_lesson";
                                $result = mysqli_query($db, $query);

                                // Проверяем успешность выполнения запроса
                                if ($result) {
                                    // Извлекаем данные
                                    $row = mysqli_fetch_assoc($result);

                                    // Выводим название предмета
                                    echo $row['name_lesson'];
                                } else {
                                    // Обработка ошибки запроса
                                    echo 'Ошибка выполнения запроса: ' . mysqli_error($db);
                                }
                            ?></th>
                        </tr>
                        <tr>
                            <th>Работа</th>
                            <th>Дата</th>
                            <th>Оценка</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            // Получаем id_lesson из параметра запроса
                            $id_lesson = $_GET['id_lesson'];
                            // Выполним SELECT запрос из таблицы rating
                            $resultRating = mysqli_query($db, "
                                SELECT description_rating, date_rating, rating
                                FROM rating
                                WHERE id_user = (SELECT id_user FROM users WHERE login_user = '$login_user') 
                                AND id_lesson = $id_lesson
                            ");

                            // Перебираем результат выборки и добавляем данные в таблицу
                            while ($rowRating = mysqli_fetch_assoc($resultRating)) {
                                echo '<tr>';
                                echo '<td>' . $rowRating['description_rating'] . '</td>';
                                echo '<td>' . $rowRating['date_rating'] . '</td>';
                                echo '<td>' . $rowRating['rating'] . '</td>';
                                echo '</tr>';
                            }
                        ?>
                    </tbody>
                </table>
                <div class="right2">
                    <?php
                        // Получаем id_lesson из параметра запроса
                        $id_lesson = $_GET['id_lesson'];

                        // Получаем ФИО преподавателя и среднюю арифметическую оценку для предмета
                        $query = "SELECT
                        CONCAT(t.surname_teacher, ' ', t.name_teacher, ' ', t.patronymic_teacher) AS teacher_name,
                                IF(ROUND(AVG(r.rating), 1) = ROUND(AVG(r.rating), 0), ROUND(AVG(r.rating), 0), ROUND(AVG(r.rating), 1)) AS average_rating
                            FROM
                                Teachers t
                            INNER JOIN rating r ON t.id_lesson = r.id_lesson
                            WHERE
                                r.id_user = (SELECT id_user FROM users WHERE login_user = '$login_user')
                                AND r.id_lesson = $id_lesson
                            GROUP BY
                                t.surname_teacher, t.name_teacher, t.patronymic_teacher";

                        $result = mysqli_query($db, $query);

                        // Проверка наличия результатов
                        if ($result) {
                            // Извлекаем данные
                            $row = mysqli_fetch_assoc($result);

                            // Выводим ФИО преподавателя
                            echo '<div class="prepod"> Преподаватель: ' . $row['teacher_name'] . '</div>';

                            // Выводим среднюю арифметическую оценку
                            echo '<div class="rat"><div class="big">Средний балл: </div>' . $row['average_rating'] . '</div>';
                        } else {
                            // Обработка ошибки запроса
                            echo 'Ошибка выполнения запроса: ' . mysqli_error($db);
                        }
                    ?>
                </div>
            </div>
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