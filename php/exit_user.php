<?php
if (isset($_COOKIE['loginUser'])) {
    setcookie("loginUser", '', time() - 1000000, '/'); //Возможно проработать загрузку
}else{
    echo 'Ошибка';
}
// !Провести тест!