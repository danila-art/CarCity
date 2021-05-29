<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
    <link rel="shortcut icon" href="../img/logo/logo.png">
    <link rel="stylesheet" href="../css/style_out_put.css">
</head>


<body>
    <div class="mk-spinner-wrap">
        <div class="mk-spinner-ring"></div>
    </div>
    <?php
    // $linkCarCityDataBase <-переменная базы данных
    require_once './connectDataBase.php';
    if (!empty($_POST['surname'])) {
        $surname = $_POST['surname'];
    } else {
        $surname = null;
    }
    if (!empty($_POST['name'])) {
        $name = $_POST['name'];
    } else {
        $name = null;
    }
    if (!empty($_POST['patronymic'])) {
        $patronymic = $_POST['patronymic'];
    } else {
        $patronymic = null;
    }
    if (!empty($_POST['login'])) {
        $login = $_POST['login'];
    } else {
        $login = null;
    }
    if (!empty($_POST['password'])) {
        $password = $_POST['password'];
    } else {
        $password = null;
    }
    if (!empty($_POST['repeatPassword'])) {
        $repeatPassword = $_POST['repeatPassword'];
    } else {
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
            echo "<section class=\"output\">
                    <div class=\"output__box\">
                        <div class=\"block-animate__bar block-animate__top\"></div>
                        <div class=\"block-animate__bar block-animate__right block-animate__delay\"></div>
                        <div class=\"block-animate__bar block-animate__bottom block-animate__delay\"></div>
                        <div class=\"block-animate__bar block-animate__left\"></div>
                        <div class=\"output__h3\">
                            <h3>Пользователь с таким логином уже существует</h3>
                        </div>
                    </div>
                    <div class=\"output__button-main\">
                        <h3><a href=\"../\">Вернуться на главную</a></h3>
                    </div>
                </section>";
        } else {
            $linkCarCityDataBase->query("INSERT INTO `user` (`name`, `surname`, `patronymic`, `login`, `password`) VALUES ('$surname','$name','$patronymic','$login','$password')");
            $thisResult = $linkCarCityDataBase->query("SELECT * FROM `user` WHERE `login` = '$login'");
            while ($thisUser = mysqli_fetch_assoc($thisResult)) {
                $id_user = $thisUser['id_user'];
            }
            $linkCarCityDataBase->query("INSERT INTO `driver_license` (`id_user`) VALUES ('$id_user')");
            $linkCarCityDataBase->query("INSERT INTO `img_user` (`id_user`) VALUES ('$id_user')");
            $linkCarCityDataBase->query("INSERT INTO `passport_user` (`id_user`) VALUES ('$id_user')");
            echo "<section class=\"output\">
                    <div class=\"output__box\">
                        <div class=\"block-animate__bar block-animate__top\"></div>
                        <div class=\"block-animate__bar block-animate__right block-animate__delay\"></div>
                        <div class=\"block-animate__bar block-animate__bottom block-animate__delay\"></div>
                        <div class=\"block-animate__bar block-animate__left\"></div>
                        <div class=\"output__h3\">
                            <h3>Вы успешно зарегестрировались</h3>
                        </div>
                        <div class=\"output__button-main\">
                            <h3><a href=\"../\">Вернуться на главную</a></h3>
                        </div>
                    </div>
                </section>";
        }
    }
    ?>
    <script>
        window.onload = function() {
            window.setTimeout(function() {
                document.querySelector('.mk-spinner-wrap').style.display = 'none';
            }, 1000);
        }
    </script>
</body>

</html>