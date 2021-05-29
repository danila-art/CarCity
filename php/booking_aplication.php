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
    require_once 'connectDataBase.php';
    if (!empty($_POST['passport-number'])) {
        $passport_number = $_POST['passport-number'];
    } else {
        $passport_number = null;
    }
    if (!empty($_POST['passport-series'])) {
        $passport_series = $_POST['passport-series'];
    } else {
        $passport_series = null;
    }
    if (!empty($_POST['userDate_of_birth'])) {
        $userDate_of_birth = $_POST['userDate_of_birth'];
    } else {
        $userDate_of_birth = null;
    }
    if (!empty($_POST['driver-number'])) {
        $driver_number = $_POST['driver-number'];
    } else {
        $driver_number = null;
    }
    if (!empty($_POST['driver-series'])) {
        $driver_series = $_POST['driver-series'];
    } else {
        $driver_series = null;
    }
    if (!empty($_POST['userDate_of_issue'])) {
        $userDate_of_issue = $_POST['userDate_of_issue'];
    } else {
        $userDate_of_issue = null;
    }
    if (!empty($_POST['id_car'])) {
        $id_car = $_POST['id_car'];
    } else {
        $id_car = null;
    }
    if (!empty($_POST['id_user'])) {
        $id_user = $_POST['id_user'];
    } else {
        $id_user = null;
    }
    if (!empty($_POST['day_start'])) {
        $day_start = $_POST['day_start'];
    } else {
        $day_start = null;
    }
    if (!empty($_POST['day_end'])) {
        $day_end = $_POST['day_end'];
    } else {
        $day_end = null;
    }
    if (!empty($_POST['time_start'])) {
        $time_start = $_POST['time_start'];
    } else {
        $time_start = null;
    }
    if (!empty($_POST['time_interval'])) {
        $time_interval = $_POST['time_interval'];
    } else {
        $time_interval = null;
    }
    if (!empty($_POST['time_end'])) {
        $time_end = $_POST['time_end'];
    } else {
        $time_end = null;
    }
    if (!empty($_POST['total_summ_money'])) {
        $total_summ_money = $_POST['total_summ_money'];
    } else {
        $total_summ_money = null;
    }
    if (!empty($_POST['day_24'])) {
        $day_24 = $_POST['day_24'];
    } else {
        $day_24 = null;
    }
    if (!empty($_POST['go_home'])) {
        $go_home = $_POST['go_home'];
    } else {
        $go_home = null;
    }
    if ($id_user != null) {
        $userResult = $linkCarCityDataBase->query("SELECT * FROM `user` WHERE `id_user` = '$id_user'");
        while ($userResultOutPut = mysqli_fetch_assoc($userResult)) {
            $userLogin = $userResultOutPut['login'];
        }
    }
    if ($passport_number != null && $passport_series != null && $userDate_of_birth != null) {
        $linkCarCityDataBase->query("UPDATE `passport_user` SET `pasport_number`= '$passport_number' ,`pasport_series`= '$passport_series',`Date_of_birth`= '$userDate_of_birth' WHERE `id_user` = '$id_user'");
    }
    if ($driver_number != null && $driver_series != null && $userDate_of_issue != null) {
        $linkCarCityDataBase->query("UPDATE `driver_license` SET `driver_license_number`='$driver_number',`driver_license_series`='$driver_series',`date_of_issue`='$userDate_of_issue' WHERE `id_user` = '$id_user'");
    }
    if ($id_car != null && $id_user != null && $day_start != null && $time_start != null && $time_end != null && $total_summ_money != null && $day_24 != null && $go_home != null) {
        $ifResult = $linkCarCityDataBase->query("SELECT * FROM `aplication` WHERE `id_car` = '$id_car' and `date_book-start` = '$day_start'");
        $ifcount = mysqli_num_rows($ifResult);
        if ($ifcount != 0) {
            echo "<section class=\"output\">
                    <div class=\"output__box\">
                        <div class=\"block-animate__bar block-animate__top\"></div>
                        <div class=\"block-animate__bar block-animate__right block-animate__delay\"></div>
                        <div class=\"block-animate__bar block-animate__bottom block-animate__delay\"></div>
                        <div class=\"block-animate__bar block-animate__left\"></div>
                        <div class=\"output__h3\">
                            <h3>Машина уже забронирована на этот день</h3>
                        </div>
                        <form class=\"booking-car-button\" action=\"../page/booking_page.php\" method=\"post\">
                            <input type=\"hidden\" value=\"$id_car\" name=\"post_id_car\">
                            <input type=\"submit\" value=\"Перейти к бронированию\">
                        </form>
                        <div class=\"output__button-main\">
                            <h3><a href=\"../\">Вернуться на главную</a></h3>
                        </div>
                    </div>
                </section>";
        } else {
            $ifUserResult = $linkCarCityDataBase->query("SELECT * FROM `aplication` WHERE `id_user` = '$id_user' and `id_car` = '$id_car' and `date_book-start` = '$day_start'");
            $ifUserCount = mysqli_num_rows($ifUserResult);
            $status = 'Ожидает модерацию';
            if ($ifUserCount != 0) {
                echo "<section class=\"output\">
                    <div class=\"block-animate__bar block-animate__top\"></div>
                    <div class=\"block-animate__bar block-animate__right block-animate__delay\"></div>
                    <div class=\"block-animate__bar block-animate__bottom block-animate__delay\"></div>
                    <div class=\"block-animate__bar block-animate__left\"></div>
                    <div class=\"output__box\">
                        <div class=\"output__h3\">
                            <h3>У вас уже забронирована эта машина</h3>
                        </div>
                        <form class=\"booking-car-button\" action=\"../page/booking_page.php\" method=\"post\">
                            <input type=\"hidden\" value=\"$id_car\" name=\"post_id_car\">
                            <input type=\"submit\" value=\"Перейти к бронированию\">
                        </form>
                        <div class=\"output__button-main\">
                            <h3><a href=\"../\">Вернуться на главную</a></h3>
                        </div>
                    </div>
                </section>";
            } else {
                $linkCarCityDataBase->query("INSERT INTO `aplication`(`id_user`, `id_car`, `date_book-start`, `date-book-end`, `time-start`, `time_interval`, `time_end`, `day-24`, `go-home`, `total_summ_money`, `status`) VALUES ('$id_user','$id_car','$day_start','$day_end','$time_start','$time_interval','$time_end','$day_24','$go_home','$total_summ_money', '$status')");
                echo "<section class=\"output\">
                    <div class=\"block-animate__bar block-animate__top\"></div>
                    <div class=\"block-animate__bar block-animate__right block-animate__delay\"></div>
                    <div class=\"block-animate__bar block-animate__bottom block-animate__delay\"></div>
                    <div class=\"block-animate__bar block-animate__left\"></div>
                    <div class=\"output__box\">
                        <div class=\"output__h3\">
                            <h3>Машина успешно забронирована, карточка добавлена в ваш профиль</h3>
                            <h3>Ждем вас у нас в организации, просим придти за 10-15 минут, чтобы мы смогли проверить данные и вы подписали договор</h3>
                        </div>
                        <div class=\"output__button-main\">
                            <h3><a href=\"../\">Вернуться на главную</a></h3>
                        </div>
                    </div>
                </section>";
            }
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