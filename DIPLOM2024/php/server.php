<?php
session_start();

// Инициализация переменных
$login_user = "";
$errors = array(); 

// Подключиться к базе данных
$db = mysqli_connect('PP4OKT', 'root', '', 'Kollage');

// LOGIN USER
if (isset($_POST['login_user_but'])) {
    $login_user = mysqli_real_escape_string($db, $_POST['login_user']);
    $password_user = mysqli_real_escape_string($db, $_POST['password_user']);
  // проверка аполненности полей
    if (empty($login_user)) {
        array_push($errors, "Введите логин");
    }
    if (empty($password_user)) {
        array_push($errors, "Введите пароль");
    }
  // если нет ошибок, авторизация
    if (count($errors) == 0) {
        // $password_user = md5($password_user);
        $query = "SELECT * FROM users WHERE login_user='$login_user' AND password_user='$password_user'";
        $results = mysqli_query($db, $query);
        if (mysqli_num_rows($results) == 1) {
          $_SESSION['login_user'] = $login_user;
          $_SESSION['success'] = "Вы вошли";
          header('location: ../index.php?page=profile');
        }else {
            array_push($errors, "Неверное имя пользователя или пароль");
        }
    }
  }  


// новости

// Получение новостей
if (!function_exists('getNewsFromDB')) {
  // Получение новостей
  function getNewsFromDB() {
      global $db;
      $query = "SELECT * FROM news";
      $result = mysqli_query($db, $query);
      
      $news = array();

      while ($row = mysqli_fetch_assoc($result)) {
          $news[] = $row;
      }

      return $news;
  }
}

?>


