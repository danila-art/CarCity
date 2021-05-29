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
            setcookie("loginUser", $thisUser['login'], time() + 3600, '/');
            header('Location: autorization_ok.php');
        }
    } else {
        echo "<!DOCTYPE html>
<html lang=\"ru\">

<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Авторизация</title>
    <link rel=\"shortcut icon\" href=\"../img/logo/logo.png\">
    <link rel=\"stylesheet\" href=\"../css/style_out_put.css\">
</head>


<body>
    <div class=\"mk-spinner-wrap\">
        <div class=\"mk-spinner-ring\"></div>
    </div>
        <section class=\"output\">
                    <div class=\"output__box\">
                        <div class=\"block-animate__bar block-animate__top\"></div>
                        <div class=\"block-animate__bar block-animate__right block-animate__delay\"></div>
                        <div class=\"block-animate__bar block-animate__bottom block-animate__delay\"></div>
                        <div class=\"block-animate__bar block-animate__left\"></div>
                        <div class=\"output__h3\">
                            <h3>Проверьте введенные данные</h3>
                        </div>
                        <div class=\"output__button-main\">
                            <h3><a href=\"../\">Вернуться на главную</a></h3>
                        </div>
                    </div>
                </section>
                <script>
                    window.onload = function() {
                        window.setTimeout(function() {
                        document.querySelector('.mk-spinner-wrap').style.display = 'none';
                    }, 1000);
                    }
                </script>
</body>

</html>";
    }
} else {
    echo "<!DOCTYPE html>
<html lang=\"ru\">

<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Авторизация</title>
    <link rel=\"shortcut icon\" href=\"../img/logo/logo.png\">
    <link rel=\"stylesheet\" href=\"../css/style_out_put.css\">
</head>


<body>
    <div class=\"mk-spinner-wrap\">
        <div class=\"mk-spinner-ring\"></div>
    </div>
    <section class=\"output\">
                    <div class=\"output__box\">
                        <div class=\"block-animate__bar block-animate__top\"></div>
                        <div class=\"block-animate__bar block-animate__right block-animate__delay\"></div>
                        <div class=\"block-animate__bar block-animate__bottom block-animate__delay\"></div>
                        <div class=\"block-animate__bar block-animate__left\"></div>
                        <div class=\"output__h3\">
                            <h3>Проверьте введенные данные</h3>
                        </div>
                        <div class=\"output__button-main\">
                            <h3><a href=\"../\">Вернуться на главную</a></h3>
                        </div>
                    </div>
                </section>
                <script>
                    window.onload = function() {
                        window.setTimeout(function() {
                        document.querySelector('.mk-spinner-wrap').style.display = 'none';
                    }, 1000);
                    }
                </script>
</body>

</html>";
}
