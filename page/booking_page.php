<?php
require_once '../php/connectDataBase.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car City - бронирование автомобиля</title>
    <link rel="stylesheet" href="../css/main_style.css">
    <link rel="shortcut icon" href="../img/logo/logo.png">
    <link rel="stylesheet" href="../css/booking_style.css">
    <link rel="stylesheet" media="screen" href="../css/font_and_fontMedia.css">
    <!-- fontMedia this ppage -->
    <link rel="stylesheet" href="../css/booking_page_fontMedia.css">
</head>

<body>
    <div class="mk-spinner-wrap">
        <div class="mk-spinner-ring"></div>
    </div>
    <section class="booking">
        <div class="booking-inner">
            <div class="block-animate__bar block-animate__top"></div>
            <div class="block-animate__bar block-animate__right block-animate__delay"></div>
            <div class="block-animate__bar block-animate__bottom block-animate__delay"></div>
            <div class="block-animate__bar block-animate__left"></div>
            <div class="booking-inner__heading">
                <h3>Аренда автомобиля</h3>
                <h3 id="procent">1/4 Шаг</h3>
                <h3 id="thisPage">Выбранная машина</h3>
            </div>
            <div class="booking-inner__count-1 count-1" id="count1">
                <?php
                if (!empty($_POST['post_id_car'])) {
                    $id_car = $_POST['post_id_car'];
                }
                $result = $linkCarCityDataBase->query("SELECT `car`.`name`, `technical_specifications`.`volume`, `technical_specifications`.`fuel`, `technical_specifications`.`power_output`, `technical_specifications`.`drive`, `technical_specifications`.`transmition`, `technical_specifications`.`engine_type`, `technical_specifications`.`expenditure`, `png_img`.`img_png` FROM `car` INNER JOIN `technical_specifications` ON `car`.`id_car` = `technical_specifications`.`id_car` INNER JOIN `png_img` ON `car`.`id_car` = `png_img`.`id_car` AND `car`.`id_car` = '$id_car'");
                while ($carOupPut = mysqli_fetch_assoc($result)) {
                    $carName = $carOupPut['name'];
                    $volume = $carOupPut['volume'];
                    $fuel = $carOupPut['fuel'];
                    $power_output = $carOupPut['power_output'];
                    $drive = $carOupPut['drive'];
                    $transmission = $carOupPut['transmition'];
                    $engine_type = $carOupPut['engine_type'];
                    $expenditure = $carOupPut['expenditure'];
                    $pngTechImg = base64_encode($carOupPut['img_png']);
                }
                ?>
                <div class="count-1__name">
                    <h2><? echo $carName ?></h2>
                </div>
                <div class="count-1__flex">
                    <div class="count-1__car-img">
                        <? echo "<img src=\"data:image/png;base64, $pngTechImg\" alt=\"errorUpImage\">" ?>
                    </div>
                    <div class="count-1__technical">
                        <div class="count-1__technical-box">
                            <h3 class="cars-more__technical-specifications-text-box-h3-1">Объём:</h3>
                            <h3 class="cars-more__technical-specifications-text-box-h3-2"><? echo $volume; ?></h3>
                        </div>
                        <div class="count-1__technical-box">
                            <h3 class="cars-more__technical-specifications-text-box-h3-1">Топливо:</h3>
                            <h3 class="cars-more__technical-specifications-text-box-h3-2"><? echo $fuel; ?></h3>
                        </div>
                        <div class="count-1__technical-box">
                            <h3 class="cars-more__technical-specifications-text-box-h3-1">Мощность:</h3>
                            <h3 class="cars-more__technical-specifications-text-box-h3-2"><? echo $power_output; ?></h3>
                        </div>
                        <div class="count-1__technical-box">
                            <h3 class="cars-more__technical-specifications-text-box-h3-1">Привод:</h3>
                            <h3 class="cars-more__technical-specifications-text-box-h3-2"><? echo $drive; ?></h3>
                        </div>
                        <div class="count-1__technical-box">
                            <h3 class="cars-more__technical-specifications-text-box-h3-1">Коробка:</h3>
                            <h3 class="cars-more__technical-specifications-text-box-h3-2"><? echo $transmission; ?></h3>
                        </div>
                        <div class="count-1__technical-box">
                            <h3 class="cars-more__technical-specifications-text-box-h3-1">Тип двигателя:</h3>
                            <h3 class="cars-more__technical-specifications-text-box-h3-2"><? echo $engine_type; ?></h3>
                        </div>
                        <div class="count-1__technical-box">
                            <h3 class="cars-more__technical-specifications-text-box-h3-1">Расход</h3>
                            <h3 class="cars-more__technical-specifications-text-box-h3-2"><? echo $expenditure; ?></h3>
                        </div>
                    </div>
                </div>
                <section class="price">
                    <?php
                    $priceRezult = $linkCarCityDataBase->query("SELECT * FROM `price_list` WHERE `id_car` = '$id_car'");
                    while ($carPrice = mysqli_fetch_assoc($priceRezult)) {
                        $priceHour = $carPrice['hour'];
                        $priceDay = $carPrice['day'];
                        $priceGoHome = $carPrice['go-home'];
                    }
                    ?>
                    <div class="price__heading">
                        <h3>Цены</h3>
                    </div>
                    <div class="price__price-flex">
                        <div class="price__price-box">
                            <h3>1 час:</h3>
                            <h3><? echo $priceHour ?> руб.</h3>
                        </div>
                        <div class="price__price-box">
                            <h3>24 часа:</h3>
                            <h3><? echo $priceDay ?> руб.</h3>
                        </div>
                        <div class="price__price-box">
                            <h3>Функция: Заберем сами:</h3>
                            <h3><? echo $priceGoHome ?> руб.</h3>
                        </div>
                    </div>
                </section>
                <div class="count__flex-button">
                    <div class="count-1__button-cansel" id="buttonCansel1">
                        <h3>Отмена</h3>
                    </div>
                    <div class="count-1__button-complete" id="buttonComplete1">
                        <h3>Продолжить</h3>
                    </div>
                </div>
            </div>
            <form action="../php/booking_aplication.php" method="post" id="form-booking">
                <div class="booking-inner__count-2 count-2" id="count2">
                    <?php
                    require_once '../php/connectDataBase.php';
                    if (!empty($_COOKIE['loginUser'])) {
                        $loginCookieUser = $_COOKIE['loginUser'];
                    } else {
                        echo "<script>
                        window.location.href = '../';
                    </script>";
                    }
                    $resultUserStart = $linkCarCityDataBase->query("SELECT * FROM `user` WHERE `login` = '$loginCookieUser'");
                    while ($assokUser = mysqli_fetch_assoc($resultUserStart)) {
                        $id_user = $assokUser['id_user'];
                        $loginUser = $assokUser['login'];
                    }
                    $resultUser = $linkCarCityDataBase->query("SELECT `user`.`surname`, `user`.`name`, `user`.`patronymic`, `user`.`login`, `img_user`.`img_user_tmp`, `passport_user`.`pasport_number`,`passport_user`.`pasport_series`,`passport_user`.`Date_of_birth`, `driver_license`.`driver_license_number`, `driver_license`.`driver_license_series`, `driver_license`.`date_of_issue` FROM `user` INNER JOIN `passport_user` ON `passport_user`.`id_user` = `user`.`id_user` INNER JOIN `driver_license` ON `driver_license`.`id_user` = `user`.`id_user` INNER JOIN `img_user` ON `user`.`id_user` = `img_user`.`id_user` AND `user`.`id_user` = '$id_user';");
                    while ($userAssok = mysqli_fetch_assoc($resultUser)) {
                        $userSurname = $userAssok['surname'];
                        $userName = $userAssok['name'];
                        $userPatronymic = $userAssok['patronymic'];
                        $userLogin = $userAssok['login'];
                        $userImg_user_tmp = $userAssok['img_user_tmp'];
                        $userPasport_number = $userAssok['pasport_number'];
                        $userPasport_series = $userAssok['pasport_series'];
                        $userDate_of_birth = $userAssok['Date_of_birth'];
                        $userDriver_license_number = $userAssok['driver_license_number'];
                        $userDriver_license_series = $userAssok['driver_license_series'];
                        $userDate_of_issue = $userAssok['date_of_issue'];
                    }
                    ?>
                    <div class="count-2__fio">
                        <div class="count-2__fio-flex">
                            <div class="count-2__fio-box">
                                <h3>Фамилия:</h3>
                                <h3><? echo $userSurname ?></h3>
                            </div>
                            <div class="count-2__fio-box">
                                <h3>Имя:</h3>
                                <h3><? echo $userName ?></h3>
                            </div>
                            <div class="count-2__fio-box">
                                <h3>Отчество:</h3>
                                <h3><? echo $userPatronymic ?></h3>
                            </div>
                        </div>
                        <div class="count-2__passport-driver-flex">
                            <div class="count-2__pasport">
                                <div class="count-2__passport-heading">
                                    <h3>Паспорт</h3>
                                </div>
                                <div class="count-2__number-series">
                                    <h3>Номер и серия</h3>
                                    <?php
                                    if ($userPasport_number != null && $userPasport_series != null) {
                                        echo "<h3>{$userPasport_number}   {$userPasport_series}</h3>";
                                        echo "<h3>День рождения: {$userDate_of_birth}</h3>";
                                    } else {
                                        echo "<div class=\"passport-number-series\">
                                    <input type=\"text\" maxlength=\"6\" name=\"passport-number\" id=\"passport-number\">
                                    <input type=\"text\" maxlength=\"4\" name=\"passport-series\" id=\"passport-series\">
                                </div>";
                                        echo "<div class=\"input-date\">
                                    <h3>День рождения:</h3>
                                    <input type=\"date\" name=\"userDate_of_birth\" id=\"userDate_of_birth\">
                                </div>";
                                    }
                                    ?>
                                </div>

                            </div>
                            <div class="count-2__driver">
                                <div class="count-2__driver">
                                    <h3>Водительское удостоверение</h3>
                                </div>
                                <div class="count-2__number-series">
                                    <h3>Номер и серия</h3>
                                </div>
                                <?php
                                if ($userDriver_license_number != null && $userDriver_license_series != null) {
                                    echo "<h3>{$userDriver_license_number}    {$userDriver_license_series}</h3";
                                    echo "<h3>Дата выдачи:  {$userDate_of_issue}</h3>";
                                } else {
                                    echo "<div class=\"driver-number-series\">
                                    <input type=\"text\" maxlength=\"6\" name=\"driver-number\" id=\"driver-number\">
                                    <input type=\"text\" maxlength=\"4\" name=\"driver-series\" id=\"driver-series\">
                                </div>";
                                    echo "<div class=\"input-date\">
                                    <h3>Дата выдачи:</h3>
                                    <input type=\"date\" name=\"userDate_of_issue\" id=\"userDate_of_issue\">
                                </div>";
                                }
                                ?>
                            </div>
                        </div>
                    </div>

                    <!-- button -->
                    <div class="count__flex-button">
                        <div class="count-1__button-cansel" id="buttonCansel2">
                            <h3>Вернуться назад</h3>
                        </div>
                        <div class="count-1__button-complete" id="buttonComplete2">
                            <h3>Продолжить</h3>
                        </div>
                    </div>
                </div>
                <div class="booking-inner__count-3 count-3" id="count3">
                    <div class="count-3__heading">
                        <h3>Если вы не ознакомились с информацией о компании, то вот вам краткая информация:</h3>
                        <div class="count-3__info">
                            <h3>Вы можете арендовать автомобиль на час на два или больше.</h3>
                            <h3>Вы можете арендовать автомобиль на сутки но не более.</h3>
                            <h3>Оставлю где удобно <- по окончанию аренды оставьте автомобиль где вам удобно и наша сотрудник лично приедет забрать его.</h3>
                                    <h3>Вы забираете машину с полным баком, информация при аренде будет в следующем шаге.</h3>
                        </div>
                    </div>
                    <div class="count-3__booking">
                        <div class="count-3__day">
                            <h3>Выберите день аренды:</h3>
                            <input type="date" name="date-day" id="date-day">
                            <h3 style="color:red" class="error-date-day"></h3>
                        </div>
                        <div class="count-3__day-end">
                            <h3>День окончание аренды:</h3>
                            <div class="count-3__day-end-box">
                                <h3 id="day-end"></h3>
                            </div>
                        </div>
                        <div class="count-3__time-flex">
                            <div class="count-3__time-start">
                                <h3>Выберите время начала аренды</h3>
                                <input type="time" name="date-time-start" id="date-time-start">
                                <h3 style="color:red" class="error-date-time-start"></h3>
                            </div>
                            <div class="count-3__time-end">
                                <h3>Выберите время конца аренды</h3>
                                <input type="time" name="date-time-end" id="date-time-end">
                                <h3 style="color:red" class="error-date-time-end"></h3>
                            </div>
                        </div>
                        <div class="count-3__24-hours">
                            <input type="checkbox" name="day-24" id="day-24">
                            <h3> - 24 часа</h3>
                        </div>
                        <div class="count-3__go-home">
                            <input type="checkbox" name="go-home" id="go-home">
                            <h3> - Функия заберем сами</h3>
                        </div>
                        <div class="count-3__summ-money">
                            <h3 style="display: none;" id="priceHour"><? echo $priceHour ?></h3>
                            <h3 style="display: none;" id="priceDay"><? echo $priceDay ?></h3>
                            <h3 style="display: none;" id="priceGoHome"><? echo $priceGoHome ?></h3>
                            <h3 id="money">Итоговая сумма: руб.</h3>
                        </div>

                    </div>
                    <!-- button -->
                    <div class="count__flex-button">
                        <div class="count-1__button-cansel" id="buttonCansel3">
                            <h3>Венрнуться назад</h3>
                        </div>
                        <div class="count-1__button-complete" id="buttonComplete3">
                            <h3>Продолжить</h3>
                        </div>
                    </div>
                </div>
                <div class="booking-inner__count-4 count-4" id="count4">
                    <input type="hidden" name="id_car" value="<? echo $id_car ?>">
                    <input type="hidden" name="id_user" value="<? echo $id_user ?>">
                    <input type="hidden" name="day_start" value="" id="input_hidden_day_start">
                    <input type="hidden" name="day_end" value="" id="input_hidden_day_end">
                    <input type="hidden" name="time_start" value="" id="input_hidden_time_start">
                    <input type="hidden" name="time_interval" value="" id="input_hidden_time_interval">
                    <input type="hidden" name="time_end" value="" id="input_hidden_time_end">
                    <input type="hidden" name="total_summ_money" value="" id="input_hidden_total_summ_money">
                    <input type="hidden" name="day_24" value="" id="input_hidden_day_24">
                    <input type="hidden" name="go_home" value="" id="input_hidden_go_home">
                    <div class="count-4__box">
                        <div class="count-4__name-car">
                            <h2><? echo $carName ?></h2>
                        </div>
                        <div class="count-4__img-car">
                            <? echo "<img src=\"data:image/png;base64, $pngTechImg\" alt=\"errorUpImage\">" ?>
                        </div>
                        <div class="count-4__login-user">
                            <div class="count-4__flex">
                                <h3>Логин:</h3>
                                <h3><? echo $loginUser ?></h3>
                            </div>
                        </div>
                        <div class="count-4__day-start">
                            <div class="count-4__flex">
                                <h3>Дата начала:</h3>
                                <h3 class="count-4-output"></h3>
                            </div>
                        </div>
                        <div class="count-4__day-end">
                            <div class="count-4__flex">
                                <h3>Дата окончания:</h3>
                                <h3 class="count-4-output"></h3>
                            </div>
                        </div>
                        <div class="count-4__time-start">
                            <div class="count-4__flex">
                                <h3>Время начала:</h3>
                                <h3 class="count-4-output"></h3>
                            </div>
                        </div>
                        <div class="count-4__time-interval">
                            <div class="count-4__flex">
                                <h3>Время аренды:</h3>
                                <h3 class="count-4-output"></h3>
                            </div>
                        </div>
                        <div class="count-4__time-end">
                            <div class="count-4__flex">
                                <h3>Время окончания:</h3>
                                <h3 class="count-4-output"></h3>
                            </div>
                        </div>
                        <div class="count-4__day-24">
                            <div class="count-4__flex">
                                <h3>24 часа:</h3>
                                <h3 class="count-4-output"></h3>
                            </div>
                        </div>
                        <div class="count-4__go-home">
                            <div class="count-4__flex">
                                <h3>Заберем сами:</h3>
                                <h3 class="count-4-output"></h3>
                            </div>
                        </div>
                        <div class="count-4__summ-total-money">
                            <div class="count-4__flex">
                                <h3>Итоговая стоимость:</h3>
                                <h3 class="count-4-output"></h3>
                            </div>
                        </div>
                    </div>
                    <!-- button -->
                    <div class="count__flex-button">
                        <div class="count-1__button-cansel" id="buttonCansel4">
                            <h3>Вернуться назад</h3>
                        </div>
                        <div class="count-1__button-complete" id="buttonComplete4">
                            <h3>Готово</h3>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <script>
        window.onload = function() {
            window.setTimeout(function() {
                document.querySelector('.mk-spinner-wrap').style.display = 'none';
            }, 1000);
        }
    </script>
    <script src="../js/booking_script.js"></script>
</body>

</html>