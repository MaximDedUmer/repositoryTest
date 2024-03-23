<?php include('server.php') ?>
<?php 
  session_start(); 
  $login_user = $_SESSION['login_user'];
// переход на страницу логина если если пользователь не авторизован
  if (!isset($_SESSION['login_user'])) {
    header("location: ../index.php?page=login");
}

// выход из аккаунта
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['login_user']);
  	header("location: ../index.php");
  }
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/profile.css">
    <link rel="stylesheet" href="../css/all.css">
    <title>Личный кабинет</title>
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
                        <li><a href="../index.php?page=profile" class="act">Профиль</a></li>
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
                        <a href="../index.php?page=profile" class="act">Личный кабинет</a>
                        <ul class="sub-menu">
                            <li class="li-sub"><a href="../index.php?page=work">Расписание</a></li>
                            <li class="li-sub"><a href="../index.php?page=rating">Оценки</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <?php
        $sss = "SELECT isTeacher FROM users WHERE login_user='$login_user'";
        $res = $db->query($sss);
        $rou = $res->fetch_assoc();
        $isTeacher = $rou['isTeacher'];

        // Вывод разного содержимого в зависимости от статуса пользователя
        if ($isTeacher == 1) {
            $result = mysqli_query($db, "SELECT * FROM `users` WHERE login_user='$login_user'");
            $row = mysqli_fetch_array($result);
    ?>
            <main class="main">
                <section class="profile">
                    <div class="profile-header">
                        <img src="https://dummyimage.com/200x200/403D39/EB5E28&text=User" alt="Аватар пользователя">
                        <div class="h2">
                            <?php echo $row['surname_user'] . ' ' . $row['name_user']; ?>
                        </div>
                    </div>
                    <div class="profile-details">
                        <div class="profile-info">
                            <div class="hr"></div>
                            <ul>
                                <li>
                                    <strong>ФИО:</strong>
                                    <?php echo $row['surname_user'] . ' ' . $row['name_user'] . ' ' . $row['patronymic_user']; ?>
                                </li>
                                
                                <li>
                                    <strong>Адрес:</strong>
                                    <?php echo $row['address_user']; ?>
                                </li>
                                <li>
                                    <strong>Телефон:</strong>
                                    <?php echo $row['tel_user']; ?>
                                </li>
                            </ul>
                        </div>
                        <div class="profile-actions">
                            <!-- выход из аккаунта -->
                            <a href="../index.php?logout='1'">
                                <button class="but-new">Выйти</button>
                            </a>
                            <a href="../index.php?page=rating">
                                <button class="but-new">Оценки</button>
                            </a>
                        </div>
                    </div>
                </section>
            </main>
    <?php
        } 
        
        else {
            $result = mysqli_query($db, "SELECT * FROM `users` WHERE login_user='$login_user'");
            $row = mysqli_fetch_array($result);
            // Выполняем запрос к базе данных для получения данных пользователя и названия группы
            $queryUserData = "SELECT u.*, g.name_group 
                            FROM users u
                            LEFT JOIN `groups` g ON u.group_user = g.id_group
                            WHERE u.login_user = '$login_user'";
            $resultUserData = mysqli_query($db, $queryUserData);
            $rowUserData = mysqli_fetch_assoc($resultUserData);
    ?>
            <main class="main">
                <section class="profile">
                    <div class="profile-header">
                        <img src="https://dummyimage.com/200x200/403D39/EB5E28&text=User" alt="Аватар пользователя">
                        <div class="h2">
                            <?php echo $row['surname_user'] . ' ' . $row['name_user']; ?>
                        </div>
                    </div>
                    <div class="profile-details">
                        <div class="profile-info">
                            <div class="hr"></div>
                            <ul>
                                <li>
                                    <strong>ФИО:</strong>
                                    <?php echo $row['surname_user'] . ' ' . $row['name_user'] . ' ' . $row['patronymic_user']; ?>
                                </li>
                                <li>
                                    <strong>Группа:</strong>
                                    <?php echo $rowUserData['name_group']; ?>
                                </li>
                                <li>
                                    <strong>Адрес:</strong>
                                    <?php echo $row['address_user']; ?>
                                </li>
                                <li>
                                    <strong>Телефон:</strong>
                                    <?php echo $row['tel_user']; ?>
                                </li>
                            </ul>
                        </div>
                        <div class="profile-actions">
                            <!-- выход из аккаунта -->
                            <a href="../index.php?logout='1'">
                                <button class="but-new">Выйти</button>
                            </a>
                            <a href="../index.php?page=rating">
                                <button class="but-new">Оценки</button>
                            </a>
                        </div>
                    </div>
                </section>
            </main>
    <?php
        }
    ?>


    
    
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
