<?php
require_once '../php/connectDataBase.php';
if (!empty($_COOKIE['loginUser'])) {
    $loginCookieUser = $_COOKIE['loginUser'];
}
$resultUserStart = $linkCarCityDataBase->query("SELECT * FROM `user` WHERE `login` = '$loginCookieUser'");
while ($assokUser = mysqli_fetch_assoc($resultUserStart)) {
    $id_user = $assokUser['id_user'];
    $loginUser = $assokUser['login'];
}
?>
<!-- Страница -> аккаунт пользователя -->
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car City - <? echo $loginUser ?></title>
    <!-- header and footer style-->
    <link rel="shortcut icon" href="../img/logo/logo.png">
    <link rel="stylesheet" href="../css/main_style.css">
    <link rel="stylesheet" href="../css/style_autorization_registration.css">
    <link rel="stylesheet" href="../css/user_style.css">
    <!--header and footer font media -->
    <link rel="stylesheet" media="screen" href="../css/font_and_fontMedia.css">
    <link rel="stylesheet" media="screen" href="../css/media_block_style.css">
    <!-- font media this page -->
    <link rel="stylesheet" media="screen" href="../css/user_font_media.css">
</head>

<body>
    <div class="mk-spinner-wrap">
        <div class="mk-spinner-ring"></div>
    </div>
    <section class="contacts" id="contactsContainer">
        <div class="contacts__box">
            <!-- box-animate -->
            <div class="block-animate__bar block-animate__top"></div>
            <div class="block-animate__bar block-animate__right block-animate__delay"></div>
            <div class="block-animate__bar block-animate__bottom block-animate__delay"></div>
            <div class="block-animate__bar block-animate__left"></div>
            <div class="block__close">
                <img src="../img/icons/cancel-white.png" alt="errorUpImage">
            </div>
            <div class="contacts__box-heading">
                <h2>Контакты</h2>
            </div>
            <div class="contacts__box-text">
                <h2>Адрес:</h2>
                <h2>Ул. Савушкина дом. 34</h2>
            </div>
            <div class="contacts__box-text">
                <h2>Номер телефона:</h2>
                <h2>+7 937 654-32-32</h2>
            </div>
            <div class="contacts__box-text">
                <h2>Электронная почта:</h2>
                <h2>Car_City_30@mail.ru</h2>
            </div>
            <div class="contacts__box-admin-data">
                <h2>Администратор</h2>
            </div>
            <div class="contacts__box-admin-img">
                <img src="../img/admin_image.jpg" alt="errorUpImage">
            </div>
            <div class="contacts__box-admin-data">
                <h2>ФИО</h2>
                <h2>Сивов Данила Алексеевич</h2>
            </div>
            <div class="contacts__box-admin-data">
                <h2>Электронная почта</h2>
                <h2>danila.sivov.96@mail.ru</h2>
            </div>
            <div class="contacts__box-admin-social-flex">
                <div class="contacts__box-admin-social-box">
                    <img src="../img/social-media-app-icons-collection/twitter.png" alt="errorUpImage">
                </div>
                <div class="contacts__box-admin-social-box">
                    <img src="../img/social-media-app-icons-collection/facebook.png" alt="errorUpImage">
                </div>
                <div class="contacts__box-admin-social-box">
                    <img src="../img/social-media-app-icons-collection/instagram.png" alt="errorUpImage">
                </div>
            </div>
        </div>
    </section>
    <section class="background-module" id="moduleAddData">
        <div class="background-module__add-img-user" id="moduleAddImg">
            <!-- box-animate -->
            <div class="block-animate__bar block-animate__top"></div>
            <div class="block-animate__bar block-animate__right block-animate__delay"></div>
            <div class="block-animate__bar block-animate__bottom block-animate__delay"></div>
            <div class="block-animate__bar block-animate__left"></div>
            <div class="background-module__heading">
                <h3>Добавьте свое фото</h3>
            </div>
            <div class="background-module__close-block">
                <img src="../img/icons/cancel-white.png" alt="errorUpImage">
            </div>
            <form action="../php/user_add_img.php" method="post" id="form-add-img" enctype="multipart/form-data">
                <div class="background-module__input-box">
                    <div class="input__wrapper">
                        <input type="hidden" name="id_user" value="<? echo $id_user ?>">
                        <input type="file" name="file_add_img" id="input__file" class="input input__file">
                        <label for="input__file" class="input__file-button">
                            <span class="input__file-icon-wrapper"><img class="input__file-icon" src="../img/icons/upload.png" alt="Выбрать файл" width="25"></span>
                            <span class="input__file-button-text">Выберите файл</span>
                        </label>
                        <h3 style="text-align: center; color: red;" class="img-error"></h3>
                    </div>
                </div>
                <div class="background-module__submit-box">
                    <input type="submit" value="Добавить">
                </div>
            </form>
        </div>
        <div class="background-module__add-pasport" id="moduleAddPasport">
            <!-- box-animate -->
            <div class="block-animate__bar block-animate__top"></div>
            <div class="block-animate__bar block-animate__right block-animate__delay"></div>
            <div class="block-animate__bar block-animate__bottom block-animate__delay"></div>
            <div class="block-animate__bar block-animate__left"></div>
            <div class="background-module__heading">
                <h3>Добавьте паспортные данные</h3>
            </div>
            <div class="background-module__close-block">
                <img src="../img/icons/cancel-white.png" alt="errorUpImage">
            </div>
            <form action="../php/user_add_passport.php" method="post" id="form-add-pasport">
                <input type="hidden" name="id_user" value="<? echo $id_user ?>">
                <div class="input-add__flex-box">
                    <div class="background-module__input-box">
                        <label for="userPasport_number">Номер паспорта</label>
                        <input class="input-add" maxlength="6" type="text" name="userPasport_number">
                        <h4 style="color: red; text-align: center;"></h4>
                    </div>
                    <div class="background-module__input-box">
                        <label for="userPasport_series">Серия паспорта</label>
                        <input class="input-add" maxlength="4" type="text" name="userPasport_series">
                        <h4 style="color: red; text-align: center;"></h4>
                    </div>
                </div>
                <div class="background-module__input-box">
                    <label for="userDate_of_birth">Дата рождения</label>
                    <input class="input-add" type="date" name="userDate_of_birth">
                    <h4 style="color: red; text-align: center;"></h4>
                </div>
                <div class="background-module__submit-box">
                    <input type="submit" value="Добавить">
                </div>
            </form>
        </div>
        <div class="background-module__add-driver" id="moduleAddDriver">
            <!-- box-animate -->
            <div class="block-animate__bar block-animate__top"></div>
            <div class="block-animate__bar block-animate__right block-animate__delay"></div>
            <div class="block-animate__bar block-animate__bottom block-animate__delay"></div>
            <div class="block-animate__bar block-animate__left"></div>
            <div class="background-module__heading">
                <h3>Добавьте водительское удостоверение</h3>
            </div>
            <div class="background-module__close-block">
                <img src="../img/icons/cancel-white.png" alt="errorUpImage">
            </div>
            <form action="../php/user_add_driver.php" method="post" id="form-add-driver">
                <input type="hidden" name="id_user" value="<? echo $id_user ?>">
                <div class="input-add__flex">
                    <div class="background-module__input-box">
                        <div class="input-add__box">
                            <label for="userDriver_license_number">Номер удостоверения</label>
                            <input class="input-add" maxlength="6" type="text" name="userDriver_license_number">
                            <h4 style="color: red; text-align: center;"></h4>
                        </div>
                    </div>
                    <div class="background-module__input-box">
                        <div class="input-add__box">
                            <label for="userDriver_license_series">Серия удостоверения</label>
                            <input class="input-add" maxlength="4" type="text" name="userDriver_license_series">
                            <h4 style="color: red; text-align: center;"></h4>
                        </div>
                    </div>
                </div>
                <div class="background-module__input-box">
                    <label for="userDate_of_issue">Дата выдачи</label>
                    <input class="input-add" type="date" name="userDate_of_issue">
                    <h4 style="color: red; text-align: center;"></h4>
                </div>
                <div class="background-module__submit-box">
                    <input type="submit" value="Добавить">
                </div>
            </form>
        </div>
    </section>
    <!-- header -->
    <header class="header">
        <div class="header__line">
            <div class="header__logo">
                <img src="../img/logo/logo.png" alt="">
            </div>
            <div class="header__nav">
                <div class="header__flex-nav">
                    <div class="header__nav-block-flex">
                        <h1><a href="">Home</a></h1>
                        <h1><a href="page/choose_car_page.php">Choose Car</a></h1>
                    </div>
                    <div class="header__nav-block-flex">
                        <h1 id="buttonContacts">Contacts</h1>
                        <h1><a href="about.php">About</a></h1>
                    </div>
                </div>
                <div class="header__neon"></div>
            </div>
            <?php
            if (!empty($_COOKIE['loginUser'])) {
                echo "<div class=\"block-user\">
                        <div class=\"auth_user\" id=\"userAuth\" data-active = \"0\">
                            <img src=\"../img/icons/user-blue.png\" alt=\"errorUpImage\">
                            <h3>{$_COOKIE['loginUser']}</h3>
                        </div>
                    </div>
                    <div class=\"block-inner\" id=\"userInner\">
                        <div class=\"block-inner-1\"><h3>История заказов</h3></div>
                        <div class=\"block-inner-2\"><h3><a href=\"\">Мой профиль</a></h3></div>
                        <div class=\"block-inner-3\"><h3><a href=\"../php/exit_user.php\">Выйти</a></h3></div>
                    </div>
                ";
            } else {
                echo "<script>
                window.location.href = '../';
                </script>";
            }
            ?>
        </div>
        <!-- header_content -->
        <div class="header-content-user">
            <?php
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
            <div class="header-content-user__flex">
                <div class="header-content-user__img-user">
                    <?php
                    if ($userImg_user_tmp == null) {
                        echo "<div class=\"user-container-img\"><img src=\"../img/icons/user-no.png\" alt=\"errorUpImage\"></div>
                        <div class=\"user-button-add-img\" id=\"buttonAddImg\"><h3>Добавить фото</h3></div>";
                    } else {
                        $imgUser = base64_encode($userImg_user_tmp);
                        echo "<div class=\"user-active-img-container\"><img src=\"data:image/jpeg;base64, $imgUser\" alt=\"errorUpImage\"></div>
                        <div class=\"user-button-add-img\" id=\"buttonAddImg\"><h3>Поменять фото</h3></div>";
                    }
                    ?>
                </div>
                <div class="header-content-user__text-container">
                    <div class="header-content-user__progress-procent">
                        <h2 id="userProcent">25%</h2>
                    </div>
                    <div class="header-content-user__progress-container">
                        <div class="header-content-user__progress-line" id="userProcentLine"></div>
                    </div>
                    <div class="header-content-user__text-box">
                        <h3>Ваш логин:</h3>
                        <h3><? echo $userLogin ?></h3>
                    </div>
                    <div class="header-content-user__text-box">
                        <h3>Вашу ФИО:</h3>
                        <h3><? echo $userSurname . ' ' . $userName . ' ' . $userPatronymic ?></h3>
                    </div>
                    <div class="header-content-user__text-box">
                        <h3>Ваш паспорт:</h3>
                        <?php
                        if ($userPasport_number == null && $userPasport_series == null && $userDate_of_birth == null) {
                            echo "<div class=\"user-button-add\" id=\"buttonAddPasport\"><h3>Добавить паспорт</h3></div>";
                        } else {
                            echo "<div class=\"user-passport-active\">
                                    <div class=\"user-passport-active__flex\">
                                        <div>
                                            <h3>Номер:</h3>
                                            <h3>$userPasport_number</h3>
                                        </div>
                                        <div>
                                            <h3>Серия:</h3>
                                            <h3>$userPasport_series</h3>
                                        </div>
                                    </div>
                                    <div class=\"user-passport-date\">
                                        <h3>Дата рождения:</h3>
                                        <h3>$userDate_of_birth</h3>
                                    </div>
                                </div>";
                        }
                        ?>
                    </div>
                    <div class="header-content-user__text-box">
                        <h3>Ваши права:</h3>
                        <?php
                        if ($userDriver_license_number == null && $userDriver_license_series == null && $userDate_of_issue == null) {
                            echo "<div class=\"user-button-add\" id=\"buttonAddDriver\"><h3>Добавить права</h3></div>";
                        } else {
                            echo "<div class=\"user-driver-active\">
                                    <div class=\"user-driver-active__flex\">
                                        <div>
                                            <h3>Номер:</h3>
                                            <h3>$userDriver_license_number</h3>
                                        </div>
                                        <div>
                                            <h3>Серия:</h3>
                                            <h3>$userDriver_license_series</h3>
                                        </div>
                                    </div>
                                    <div class=\"user-driver-date\">
                                        <h3>Дата выдачи:</h3>
                                        <h3>$userDate_of_issue</h3>
                                    </div>
                            </div>";
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section class="booking">
        <div class="booking__heading">
            <h3>Ваши карточки бронирования</h3>
        </div>
        <div class="booking__text-h3">
            <h3>Здесь находятся карточки с вашим бронированием на автомобиль.</h3>
        </div>
        <div class="booking__flex-container">
            <?php
            $bookingResult = $linkCarCityDataBase->query("SELECT `car`.`id_car`, `car`.`name`, `png_img`.`img_png`, `user`.`id_user`,`user`.`login`, `aplication`.`date_book-start`, `aplication`.`date-book-end`, `aplication`.`time-start`, `aplication`.`time_interval`, `aplication`.`time_end`, `aplication`.`day-24`, `aplication`.`go-home`, `aplication`.`total_summ_money`, `aplication`.`status` FROM `aplication` INNER JOIN `car` INNER JOIN `png_img` INNER JOIN `user` ON `aplication`.`id_car` = `car`.`id_car` AND `aplication`.`id_user` = `user`.`id_user` AND `aplication`.`id_car` = `png_img`.`id_car` AND `aplication`.`id_user` = '$id_user';");
            $countBooking = mysqli_num_rows($bookingResult);
            if ($countBooking > 0) {
                while ($booking = mysqli_fetch_assoc($bookingResult)) {
                    $carpng = base64_encode($booking['img_png']);
                    if ($status = 'Ожидает модерацию') {
                        $statusOut = "<h3 style=\"color: #ff8834\">Ожидает модерацию</h3>";
                    }
                    echo "            <div class=\"booking__box\">
                <div class=\"booking__name-car\">
                    <h2>{$booking['name']}</h2>
                </div>
                <div class=\"booking__img-car\">
                    <img src=\"data:image/png;base64,$carpng \" alt=\"errorUpImage\">
                </div>
                <div class=\"booking__login-user\">
                    <div class=\"booking__flex\">
                        <h3>Логин:</h3>
                        <h3>{$booking['login']}</h3>
                    </div>
                </div>
                <div class=\"booking__day-start\">
                    <div class=\"booking__flex\">
                        <h3>Дата начала:</h3>
                        <h3 class=\"booking-output\">{$booking['date_book-start']}</h3>
                    </div>
                </div>
                <div class=\"booking__day-end\">
                    <input type=\"hidden\" value=\"{$booking['date-book-end']}\" class=\"bookingDayEnd\">
                    <div class=\"booking__flex\">
                        <h3>Дата окончания:</h3>
                        <h3 class=\"booking-output\">{$booking['date-book-end']}</h3>
                    </div>
                </div>
                <div class=\"booking__time-start\">
                    <div class=\"booking__flex\">
                        <h3>Время начала:</h3>
                        <h3 class=\"booking-output\">{$booking['time-start']}</h3>
                    </div>
                </div>
                <div class=\"booking__time-interval\">
                    <input type=\"hidden\" value=\"{$booking['time_interval']}\" class=\"bookingTimeInterval\">
                    <div class=\"booking__flex\">
                        <h3>Время аренды:</h3>
                        <h3 class=\"booking-output\">{$booking['time_interval']}</h3>
                    </div>
                </div>
                <div class=\"booking__time-end\">
                    <div class=\"booking__flex\">
                        <h3>Время окончания:</h3>
                        <h3 class=\"booking-output\">{$booking['time_end']}</h3>
                    </div>
                </div>
                <div class=\"booking__day-24\">
                    <div class=\"booking__flex\">
                        <h3>24 часа:</h3>
                        <h3 class=\"booking-output\">{$booking['day-24']}</h3>
                    </div>
                </div>
                <div class=\"booking__go-home\">
                    <div class=\"booking__flex\">
                        <h3>Заберем сами:</h3>
                        <h3 class=\"booking-output\">{$booking['go-home']}</h3>
                    </div>
                </div>
                <div class=\"booking__summ-total-money\">
                    <div class=\"booking__flex\">
                        <h3>Итоговая стоимость:</h3>
                        <h3 class=\"booking-output\">{$booking['total_summ_money']}  руб.</h3>
                    </div>
                </div>
                <div class=\"booking__status\">
                    $statusOut
                </div>
            </div>";
                }
            } else {
                echo "<div style=\"display:block; width: 100%; padding-top:5%; padding-bottom:5%; text-align: center;\"><h2>Карточек бронирования пока нет!</h2></div>";
            }
            ?>

        </div>
    </section>
    <footer class="footer">
        <div class="footer__logo-animate">
            <div class="footer__neon-left-shell">
                <div class="footer__neon-left footer-neon"></div>
            </div>
            <div class="footer__logo-img">
                <img src="../img/logo/logo.png" alt="errorUpImage">
            </div>
            <div class="footer__neon-right-shell">
                <div class="footer__neon-right footer-neon"></div>
            </div>
        </div>
        <div class="footer__flex">
            <div class="footer__content-left">
                <div class="footer__social-heading">
                    <h3>Мы в соц сетях:</h3>
                </div>
                <div class="footer__flex-social">
                    <div class="footer__social-box">
                        <img src="../img/social-media-app-icons-collection/facebook.png" alt="errorUpImage">
                    </div>
                    <div class="footer__social-box">
                        <img src="../img/social-media-app-icons-collection/instagram.png" alt="errorUpImage">
                    </div>
                    <div class="footer__social-box">
                        <img src="../img/social-media-app-icons-collection/twitter.png" alt="errorUpImage">
                    </div>

                </div>
            </div>
            <div class="footer__content-center">
                <h3>О нас</h3>
                <h3>Контакты</h3>
                <h3>Карта сайта</h3>
                <h3>Выбрать авто</h3>
            </div>
            <div class="footer__content-right">
                <h3>Политика конфидициальности</h3>
                <h3>Обработка персональных данных</h3>
                <h3>Условия аренды</h3>
            </div>
        </div>
    </footer>
    <!-- js script  -->
    <script>
        window.onload = function() {
            window.setTimeout(function() {
                document.querySelector('.mk-spinner-wrap').style.display = 'none';
            }, 1000);
        }
    </script>
    <script type="text/javascript">
        //body
        let elementBody = document.querySelector('body');
        // headerNeonLine and footerNeon
        let headerNeon = document.querySelector('.header__neon');
        let footerNeon = document.querySelectorAll('.footer-neon');
        setInterval(() => {
            bodyWidth = elementBody.clientWidth;
            headerNeon.style.backgroundSize = bodyWidth + 'px';
            footerNeon.forEach((elem) => {
                elem.style.width = bodyWidth / 2 + 'px';
            });

        }, 1000);
        //progressBar
        let progressLine = document.querySelectorAll('.animate-section__line');
        window.addEventListener('scroll', (e) => {
            let bodyScrollTop = document.documentElement.scrollTop;
            let windowHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;
            let widthProgressLine = bodyScrollTop / windowHeight * 100;
            progressLine.forEach((element) => {
                element.style.width = widthProgressLine + '%';
            });

        });
        //authUser
        if (document.getElementById('userAuth') != null && document.getElementById('userInner') != null) {
            const headerLineUserActive = document.getElementById('userAuth');
            const headerLineUserInner = document.getElementById('userInner');
            headerLineUserActive.addEventListener('click', () => {
                if (headerLineUserActive.getAttribute("data-active") == 0) {
                    headerLineUserActive.dataset.active = 1;
                    headerLineUserInner.style.display = 'flex';
                } else {
                    headerLineUserActive.dataset.active = 0;
                    headerLineUserInner.style.display = 'none';
                }
            });
        }
        // script contacts 
        const contactsContainer = document.getElementById('contactsContainer');
        const buttonContacts = document.getElementById('buttonContacts');
        buttonContacts.addEventListener('click', () => {
            if (getComputedStyle(contactsContainer).display == 'none') {
                contactsContainer.style.display = 'block';
                const closeContactContainer = contactsContainer.querySelector('.block__close');
                closeContactContainer.addEventListener('click', () => {
                    contactsContainer.style.display = 'none';
                });
            }
        });
        // add-img
        let inputFile = document.querySelector('.input__file');
        let inputFileLabel = document.querySelector('.input__file-button-text');
        inputFile.addEventListener('change', () => {
            inputFileLabel.innerHTML = 'Файл выбран';
        });
    </script>
    <script src="../js//user_script.js"></script>
</body>

</html>