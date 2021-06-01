<?php
require_once '../php/connectDataBase.php';
if (!empty($_POST['post_id_car'])) {
    $id_car = $_POST['post_id_car'];
}
$carResult = $linkCarCityDataBase->query("SELECT * FROM `car` WHERE `id_car` = '$id_car'");
while ($carOut = mysqli_fetch_assoc($carResult)) {
    $nameCar = $carOut['name'];
}
?>
<!-- Страница -> узнать больше о оределенной машине -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car City - <? echo $nameCar ?></title>
    <!-- header and footer style-->
    <link rel="shortcut icon" href="../img/logo/logo.png">
    <link rel="stylesheet" href="../css/main_style.css">
    <link rel="stylesheet" href="../css/style_autorization_registration.css">
    <link rel="stylesheet" href="../css/show_more_car_style.css">
    <!--header and footer font media -->
    <link rel="stylesheet" media="screen" href="../css/font_and_fontMedia.css">
    <!-- font media this page -->
    <link rel="stylesheet" href="../css/show_more_car_fontMedia.css">
    <link rel="stylesheet" media="screen" href="../css/media_block_style.css">
</head>

<body>
    <div class="mk-spinner-wrap">
        <div class="mk-spinner-ring"></div>
    </div>
    <section class="block-autorization-and-registration" id="moduleBlockRegAuto">
        <div class="block-registration" id="blockRegistration">
            <!-- box-animate -->
            <div class="block-animate__bar block-animate__top"></div>
            <div class="block-animate__bar block-animate__right block-animate__delay"></div>
            <div class="block-animate__bar block-animate__bottom block-animate__delay"></div>
            <div class="block-animate__bar block-animate__left"></div>
            <div class="block__close">
                <img src="../img/icons/cancel-white.png" alt="errorUpImage">
            </div>
            <div class="block-registration__heading">
                <h3>Регистрация</h3>
            </div>
            <div class="block-registration__form-registration">
                <form action="../php/registration_user.php" method="post" id="formRegistrattion">
                    <div class="block-registration__flex-fio">
                        <div class="block-registration__fio-box">
                            <label for="surname">Фамилия</label>
                            <input type="text" class="input__text" name="surname">
                        </div>
                        <div class="block-registration__fio-box">
                            <label for="name">Имя</label>
                            <input type="text" class="input__text" name="name">
                        </div>
                        <div class="block-registration__fio-box">
                            <label for="patronymic">Отчество</label>
                            <input type="text" class="input__text" name="patronymic">
                        </div>
                    </div>
                    <div class="block-registration__box-input">
                        <label for="login">Логин</label>
                        <input type="text" class="input__text" name="login">
                    </div>
                    <div class="block-registration__box-input">
                        <label for="password">Пароль</label>
                        <input type="password" class="input__text" name="password">
                    </div>
                    <div class="block-registration__box-input">
                        <label for="repeatPassword">Повторите пароль</label>
                        <input type="password" class="input__text" name="repeatPassword">
                    </div>
                    <div class="block-registration__check-box">
                        <div class="block-registration__flex-check-box">
                            <input type="checkbox" class="input__check" name="check">
                            <h3>Вы даете согласие на <span class="blue-link">обработку персональных данных</span> и
                                соглашаетесь c
                                <span class="blue-link">политикой конфиденциальности</span>
                            </h3>
                        </div>
                    </div>
                    <div class="block-registration__submit">
                        <input type="submit" value="Зарегестрироваться">
                    </div>
                    <div class="block-registration__connect-autorization">
                        <h3>Вы уже зарегестрированы?</h3>
                        <h3 class="block-connect" id="registrationConnectAutorization">Авторизируйтесь</h3>
                    </div>

                </form>
            </div>
        </div>
        <div class="block-autorization" id="blockAutorization">
            <div class="block-animate__bar block-animate__top"></div>
            <div class="block-animate__bar block-animate__right block-animate__delay"></div>
            <div class="block-animate__bar block-animate__bottom block-animate__delay"></div>
            <div class="block-animate__bar block-animate__left"></div>
            <div class="block__close">
                <img src="../img/icons/cancel-white.png" alt="errorUpImage">
            </div>
            <div class="block-autorization__heading">
                <h3>Авторизация</h3>
            </div>
            <div class="block-autorization__form-autorization">
                <form action="../php/autorization_user.php" method="post" id="formAutorization">
                    <div class="block-autorization__login">
                        <label for="login">Логин</label>
                        <input type="text" class="input__autorization" name="login">
                    </div>
                    <div class="block-autorization__password">
                        <label for="password">Пароль</label>
                        <input type="password" class="input__autorization" name="password">
                    </div>
                    <div class="block-autorization__submit">
                        <input type="submit" value="Авторизироваться">
                    </div>
                    <div class="block-autorization__connect-registration">
                        <h3>Ещё не зарегестрированы?</h3>
                        <h3 class="block-connect" id="autorizationConnectRegistration">Зарегестрироваться</h3>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- header -->
    <?php
    if ($_POST['post_id_car'] == 1) {
        echo "<header class=\"header header__honda-nsx \">";
    }
    if ($_POST['post_id_car'] == 2) {
        echo "<header class=\"header header__kia-k5\">";
    }
    if ($_POST['post_id_car'] == 3) {
        echo "<header class=\"header header__kia-stinger\">";
    }
    if ($_POST['post_id_car'] == 4) {
        echo "<header class=\"header header__Lamborghini-Gallardo-black\">";
    }
    if ($_POST['post_id_car'] == 5) {
        echo "<header class=\"header header__Lamborghini-Gallardo-orange\">";
    }
    if ($_POST['post_id_car'] == 6) {
        echo "<header class=\"header header__mazda-6\">";
    }
    if ($_POST['post_id_car'] == 7) {
        echo "<header class=\"header header__mazda-cx-8\">";
    }
    if ($_POST['post_id_car'] == 8) {
        echo "<header class=\"header header__mazda-mx-5\">";
    }
    if ($_POST['post_id_car'] == 9) {
        echo "<header class=\"header header__mercedes-benz-amg-gt-coupe\">";
    }
    if ($_POST['post_id_car'] == 10) {
        echo "<header class=\"header header__mercedes-benz-cls\">";
    }
    if ($_POST['post_id_car'] == 11) {
        echo "<header class=\"header header__nissan_gtr_35-blue\">";
    }
    if ($_POST['post_id_car'] == 12) {
        echo "<header class=\"header header__nissan_gtr_35-orange\">";
    }
    if ($_POST['post_id_car'] == 13) {
        echo "<header class=\"header header__porsche-911-carrera-s\">";
    }
    ?>
    <div class="header__line">
        <div class="header__logo">
            <img src="../img/logo/logo.png" alt="">
        </div>
        <div class="header__nav">
            <div class="header__flex-nav">
                <div class="header__nav-block-flex">
                    <h1><a href="../">Home</a></h1>
                    <h1><a href="choose_car_page.php">Choose Car</a></h1>
                </div>
                <div class="header__nav-block-flex">
                    <h1><a href="">Contacts</a></h1>
                    <h1><a href="">About</a></h1>
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
                        <div class=\"block-inner-2\"><h3><a href=\"../page/user_account.php\">Мой профиль</a></h3></div>
                        <div class=\"block-inner-3\"><h3><a href=\"../php/exit_user.php\">Выйти</a></h3></div>
                    </div>
                ";
        } else {
            echo "<div class=\"header__user\" id=\"buttonLogIn\">
                            <h1>Log<br>in</h1>
                        </div>";
        }
        ?>
    </div>
    <div class="header__content">
        <?php
        $result = $linkCarCityDataBase->query("SELECT `car`.`name`, `car`.`preview_car_page_briefly`, `car`.`preview_car_page`, `png_img`.`img_png` FROM `car` INNER JOIN `png_img` ON `car`.`id_car` = `png_img`.`id_car` and `car`.`id_car` = '$id_car';");
        while ($carHeader = mysqli_fetch_assoc($result)) {
            $carName = $carHeader['name'];
            $carBriefly = $carHeader['preview_car_page_briefly'];
            $carPreview = $carHeader['preview_car_page'];
            $carPngImg = base64_encode($carHeader['img_png']);
        }
        ?>
        <div class="header__content-flex">
            <div class="header__content-img">
                <div class="header__content-inner-block-img">
                    <img src="data:image/png;base64,<? echo $carPngImg ?>" alt="errorUpImage">
                </div>
            </div>
            <div class="header__content-text">
                <div class="header__content-inner-text">
                    <div class="header__content-inner-text-heading">
                        <h2><? echo $carName ?></h2>
                    </div>
                    <div class="header__content-inner-text-briefly">
                        <h3><? echo $carBriefly ?></h3>
                    </div>
                    <div class="header__content-inner-text-preview">
                        <h3><? echo $carPreview ?></h3>
                    </div>
                    <div class="header__content-inner-text-button-book">
                        <form class="show-page-button booking-car-button" id="carThisForm" action="booking_page.php" method="post">
                            <input type="hidden" name="post_id_car" value="<? echo $id_car ?>">
                            <h3 onclick="document.getElementById('carThisForm').submit();">Забронировать</h3>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </header>
    <section class="cars-more">
        <div class="cars-more__exterior-car">
            <?php
            $resultExterior = $linkCarCityDataBase->query("SELECT `car`.`information_exterior` FROM `car` WHERE `car`.`id_car` = '$id_car'");
            while ($text = mysqli_fetch_assoc($resultExterior)) {
                $textExterior = $text['information_exterior'];
            }
            ?>
            <div class="cars-more__exterior-car-heading">
                <h3>Экстерьер</h3>
            </div>
            <div class="cars-more__exterior-car-text">
                <h3><? echo $textExterior ?></h3>
            </div>
            <div class="cars-more__exterior-car-img-container">
                <?php
                $resultExteriorImg = $linkCarCityDataBase->query("SELECT `exterior_img`.`exterior_img_tmp` FROM `car` INNER JOIN `exterior_img` ON `car`.`id_car` = `exterior_img`.`id_car` AND `car`.`id_car` = '$id_car';");
                while ($exteriorImg = mysqli_fetch_assoc($resultExteriorImg)) {
                    $exteriorImgBase64 = base64_encode($exteriorImg['exterior_img_tmp']);
                    echo "<div class=\"cars-more__exterior-car-img-block\" data-active = \"0\">
                                <img src=\"data:image/jpeg;base64,$exteriorImgBase64\" alt=\"errorUpimage\">
                        </div>";
                }
                ?>
            </div>
        </div>
        <div class="cars-more__interior-car">
            <?php
            $resultInterior = $linkCarCityDataBase->query("SELECT `car`.`information_interior` FROM `car` WHERE `car`.`id_car` = '$id_car'");
            while ($text = mysqli_fetch_assoc($resultInterior)) {
                $textInterior = $text['information_interior'];
            }
            ?>
            <div class="cars-more__interior-car-heading">
                <h3>Интерьер</h3>
            </div>
            <div class="cars-more__inerior-car-text">
                <h3><? echo $textInterior ?></h3>
            </div>
            <div class="cars-more__interior-car-img-container">
                <?php
                $resultInteriorImg = $linkCarCityDataBase->query("SELECT `interior_img`.`interior_img_tmp` FROM `car` INNER JOIN `interior_img` ON `car`.`id_car` = `interior_img`.`id_car` AND `car`.`id_car` = '$id_car'");
                while ($interiorImg = mysqli_fetch_assoc($resultInteriorImg)) {
                    $interiorImgBase64 = base64_encode($interiorImg['interior_img_tmp']);
                    echo "<div class=\"cars-more__interior-car-img-block\" data-active = \"0\">
                                <img src=\"data:image/jpeg;base64,$interiorImgBase64\" alt=\"errorUpimage\">
                        </div>";
                }
                ?>
            </div>
        </div>
        <div class="cars-more__technical-specifications">
            <div class="cars-more__technical-specifications-container">
                <div class="cars-more__technical-specifications-heading">
                    <h3>Технические характеристики</h3>
                </div>
            </div>
            <?php
            $resultTechnical = $linkCarCityDataBase->query("SELECT `technical_specifications`.`volume`, `technical_specifications`.`fuel`, `technical_specifications`.`power_output`, `technical_specifications`.`drive`, `technical_specifications`.`transmition`, `technical_specifications`.`engine_type`, `technical_specifications`.`expenditure`, `png_img`.`img_png` FROM `car` INNER JOIN `technical_specifications` ON `car`.`id_car` = `technical_specifications`.`id_car` INNER JOIN `png_img` ON `car`.`id_car` = `png_img`.`id_car` AND `car`.`id_car` = '$id_car';");
            while ($technicalOupPut = mysqli_fetch_assoc($resultTechnical)) {
                $volume = $technicalOupPut['volume'];
                $fuel = $technicalOupPut['fuel'];
                $power_output = $technicalOupPut['power_output'];
                $drive = $technicalOupPut['drive'];
                $transmission = $technicalOupPut['transmition'];
                $engine_type = $technicalOupPut['engine_type'];
                $expenditure = $technicalOupPut['expenditure'];
                $pngTechImg = base64_encode($technicalOupPut['img_png']);
            }
            ?>
            <div class="cars-more__technical-specifications-flex">
                <div class="cars-more__technical-specifications-text-content">
                    <div class="cars-more__technical-specifications-text-box">
                        <h3 class="cars-more__technical-specifications-text-box-h3-1">Объём:</h3>
                        <h3 class="cars-more__technical-specifications-text-box-h3-2"><? echo $volume; ?></h3>
                    </div>
                    <div class="cars-more__technical-specifications-text-box">
                        <h3 class="cars-more__technical-specifications-text-box-h3-1">Топливо:</h3>
                        <h3 class="cars-more__technical-specifications-text-box-h3-2"><? echo $fuel; ?></h3>
                    </div>
                    <div class="cars-more__technical-specifications-text-box">
                        <h3 class="cars-more__technical-specifications-text-box-h3-1">Мощность:</h3>
                        <h3 class="cars-more__technical-specifications-text-box-h3-2"><? echo $power_output; ?></h3>
                    </div>
                    <div class="cars-more__technical-specifications-text-box">
                        <h3 class="cars-more__technical-specifications-text-box-h3-1">Привод:</h3>
                        <h3 class="cars-more__technical-specifications-text-box-h3-2"><? echo $drive; ?></h3>
                    </div>
                    <div class="cars-more__technical-specifications-text-box">
                        <h3 class="cars-more__technical-specifications-text-box-h3-1">Коробка:</h3>
                        <h3 class="cars-more__technical-specifications-text-box-h3-2"><? echo $transmission; ?></h3>
                    </div>
                    <div class="cars-more__technical-specifications-text-box">
                        <h3 class="cars-more__technical-specifications-text-box-h3-1">Тип двигателя:</h3>
                        <h3 class="cars-more__technical-specifications-text-box-h3-2"><? echo $engine_type; ?></h3>
                    </div>
                    <div class="cars-more__technical-specifications-text-box">
                        <h3 class="cars-more__technical-specifications-text-box-h3-1">Расход</h3>
                        <h3 class="cars-more__technical-specifications-text-box-h3-2"><? echo $expenditure; ?></h3>
                    </div>
                </div>
                <div class="cars-more__technical-specifications-img-box">
                    <?php
                    echo "<img src=\"data:image/png;base64, {$pngTechImg}\" alt=\"errorUpImage\">";
                    ?>
                </div>
            </div>
        </div>
    </section>
    <section class="price">
        <?php
        $priceRezult = $linkCarCityDataBase->query("SELECT * FROM `price_list` WHERE `id_car` = '$id_car'");
        while ($carPrice = mysqli_fetch_assoc($priceRezult)) {
            $priceHour = $carPrice['hour'];
            $priceDay = $carPrice['day'];
            $picerGoHome = $carPrice['go-home'];
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
                <h3><? echo $picerGoHome ?> руб.</h3>
            </div>
        </div>
        <form class="show-page-button booking-car-button" action="booking_page.php" method="post">
            <input type="hidden" name="post_id_car" value="<? echo $id_car ?>">
            <input type="submit" value="Забронировать">
        </form>
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
    <script>
        window.onload = function() {
            window.setTimeout(function() {
                document.querySelector('.mk-spinner-wrap').style.display = 'none';
            }, 1000);
        }
    </script>
    <!-- js script  -->
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
    </script>
    <script src="../js/show-more_car_script.js"></script>
    <script src="../js/script_registration_and_autorization.js"></script>
</body>

</html>