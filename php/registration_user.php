<?php
// $linkCarCityDataBase <-переменная базы данных
require_once './connectDataBase.php';
if(!empty($_POST['surname'])){
    $surname = $_POST['surname'];
}else{
    $surname = null;
}
if(!empty($_POST['name'])){
    $name = $_POST['name'];
}else{
    $name = null;
}
if(!empty($_POST['patronymic'])){
    $patronymic = $_POST['patronymic'];
}else{
    $patronymic = null;
}
if(!empty($_POST['login'])){
    $login = $_POST['login'];
}else{
    $login = null;
}
if(!empty($_POST['password'])){
    $password = $_POST['password'];
}else{
    $password = null;
}
if(!empty($_POST['repeatPassword'])){
    $repeatPassword = $_POST['repeatPassword'];
}else{
    $repeatPassword = null;
}
if ($password == $repeatPassword) {
    $password = md5($password);
} else {
    $password = null;
}
if ($surname != null && $name != null && $patronymic != null && $login != null && $password != null && $repeatPassword != null) {
    $ifUser = $linkCarCityDataBase->query("SELECT * FROM `user` WHERE `login` = '$login'");
    $countUser = mysqli_num_rows($ifUser);
    if ($countUser != 0) {
        echo "Пользователь с таким логином уже существует!"; //Придумать красивый вывод
    }else{
        $linkCarCityDataBase->query("INSERT INTO `user` (`name`, `surname`, `patronymic`, `login`, `password`) VALUES ('$surname','$name','$patronymic','$login','$password')");
        
    }
}
// !Провести тест!