<?php
// $linkCarCityDataBase <-переменная базы данных
require_once './connectDataBase.php';
if (!empty($_POST['login'])) {
    $login = $_POST['login'];
} else {
    $login = null;
}

if (!empty($_POST['password'])) {
    $password = $_POST['password'];
    $password = md5($password);
} else {
    $password = null;
}
if ($login != null && $password != null) {
    $resultUser = $linkCarCityDataBase->query("SELECT * FROM `user` WHERE `login` = '$login' and `password` = '$password'");
    $countUser = mysqli_num_rows($resultUser);
    if ($countUser == 1) {
        echo "Вы успешно вошли";
        setcookie('loginUser', $login, time() + 3600, '/'); //Доработать красивый вывод
    } else {
        echo "Проверьте введенные данные"; //Доработать красивый вывод
    }
}
// !Провести тест!