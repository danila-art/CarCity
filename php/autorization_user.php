<?php
$host = 'localhost'; // адрес сервера
$database = 'car_city_database'; // имя базы данных
$user = 'root'; // имя пользователя
$password = 'root'; // пароль

$linkCarCityDataBase = mysqli_connect($host, $user, $password, $database);
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
        while ($thisUser = mysqli_fetch_assoc($resultUser)) {
            setcookie("loginUser", $thisUser['login'], time() + 3600, '/'); //Доработать красивый вывод
        }
        echo "Вы успешно вошли";
    } else {
        echo "Проверьте введенные данные"; //Доработать красивый вывод
    }
}else{
    echo "Проверьте введенные данные"; //Доработать красивый вывод
}
// !Провести тест!