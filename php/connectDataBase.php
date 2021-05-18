<!-- файл подключения к базе данных -->
<?php
$host = 'localhost'; // адрес сервера
$database = 'car_city_database'; // имя базы данных
$user = 'root'; // имя пользователя
$password = 'root'; // пароль

$linkCarCityDataBase = mysqli_connect($host, $user, $password, $database);
?>