<?php 
  session_start(); 
// выход из аккаунта
if (isset($_GET['logout'])) {
  session_destroy();
  unset($_SESSION['login_user']);
  header("location: ../index.php");
}
//подключение к базе данных
  include 'php/server.php';
  // Страница установлена на (home.php) по умолчанию, поэтому, когда посетитель посещает, это будет страница, которую они видят.
    $page = isset($_GET['page']) && file_exists('php/' . $_GET['page'] . '.php') ? $_GET['page'] : 'home';
    // Включите и покажите запрошенную страницу
    include 'php/' . $page . '.php';
?>
