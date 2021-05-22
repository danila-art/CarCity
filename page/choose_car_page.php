<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CarCity - Выбрать авто</title>
    <!-- header and footer style-->
    <link rel="stylesheet" href="../css/main_style.css">
    <link rel="stylesheet" href="../css/style_autorization_registration.css">
    <link rel="stylesheet" href="../css/choose_page_style.css">
    <!--header and footer font media -->
    <link rel="stylesheet" media="screen" href="../css/font_and_fontMedia.css">
    <!-- font media this page -->
    <link rel="stylesheet" media="screen" href="../css/choose_page_fontMedia.css">
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
    <header class="header">
        <div class="header__line">
            <div class="header__logo">
                <img src="../img/logo/logo.png" alt="">
            </div>
            <div class="header__nav">
                <div class="header__flex-nav">
                    <div class="header__nav-block-flex">
                        <h1><a href="../">Home</a></h1>
                        <h1><a href="">Choose Car</a></h1>
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
                        <div class=\"auth_user\" id=\"userAuth\"  data-active = \"0\">
                            <img src=\"../img/icons/user-blue.png\" alt=\"errorUpImage\">
                            <h3>{$_COOKIE['loginUser']}</h3>
                        </div>
                    </div>
                    <div class=\"block-inner\" id=\"userInner\">
                        <div class=\"block-inner-1\"><h3>История заказов</h3></div>
                        <div class=\"block-inner-2\"><h3>Мой профиль</h3></div>
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
            <!-- slider -->
            <div class="header__content-slide-1 slide-1">
                <div class="slide-1__heading">
                    <div class="slide-1__heading-inner">
                        <h3>Новая модель</h3>
                        <h2>Porche 911 turbo</h2>
                    </div>
                </div>
                <div class="slide-1__backround-clip-path">
                    <div class="slide-1__img-car">
                        <img src="../img/cars_png/kisspng-porsche-911-turbo-s-cabriolet-porsche-930-sports-c-black-porsche-911-turbo-car-5a748d924b5d79.0030889815175878583087.png" alt="errorUpImage">
                    </div>
                    <div class="slide-1__buttons">
                        <div class="slide-1__show-more-button">
                            <h3>Узнать больше</h3>
                        </div>
                        <div class="slide-1__button-book">
                            <h3>Забронировать</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section class="filter">
        <div class="filter__heading">
            <h3>Фильтр по машинам:</h3>
        </div>
        <div class="filter__flex-box">
            <div class="filter__box-select">
                <div class="filter__select-heading">
                    <h3>Тип кузова:</h3>
                </div>
                <div class="filter__select">
                    <div class="filter__select-head">
                        <h3>Показать все</h3>
                        <div class="filter__icon">
                            <img src="../img/icons/traingle.png" alt="errorUpImage">
                        </div>
                    </div>
                    <div class="filter__inner-content"></div>
                </div>
            </div>
            <div class="filter__box-select">
                <div class="filter__select-heading">
                    <h3>Объем двигателя</h3>
                </div>
                <div class="filter__select">
                    <div class="filter__select-head">
                        <h3>Показать все</h3>
                        <div class="filter__icon">
                            <img src="../img/icons/traingle.png" alt="errorUpImage">
                        </div>
                    </div>
                    <div class="filter__inner-content"></div>
                </div>
            </div>
            <div class="filter__box-select">
                <div class="filter__select-heading">
                    <h3>Цена за сутки:</h3>
                </div>
                <div class="filter__select">
                    <div class="filter__select-head">
                        <h3>Показать все</h3>
                        <div class="filter__icon">
                            <img src="../img/icons/traingle.png" alt="errorUpImage">
                        </div>
                    </div>
                    <div class="filter__inner-content"></div>
                </div>
            </div>
            <div class="filter__box-select">
                <div class="filter__select-heading">
                    <h3>Поиск по цвету</h3>
                </div>
                <div class="filter__select">
                    <div class="filter__select-head">
                        <h3>Показать все</h3>
                        <div class="filter__icon">
                            <img src="../img/icons/traingle.png" alt="errorUpImage">
                        </div>
                    </div>
                    <div class="filter__inner-content"></div>
                </div>
            </div>
        </div>
        <div class="filter__show-button">
            <h3>Показать</h3>
        </div>
    </section>
    <section class="cars">
        <div class="cars__heading">
            <h3>Наши машины:</h3>
        </div>
        <?php
        require_once '../php/connectDataBase.php';
        $resultCar = $linkCarCityDataBase->query("SELECT `car`.`id_car`, `car`.`name`, `car`.`preview_main_choose_page`, `png_img`.`id_car`, `png_img`.`img_png` FROM `car` INNER JOIN `png_img` ON `car`.`id_car` = `png_img`.`id_car`;");
        while ($carData = mysqli_fetch_assoc($resultCar)) {
            $imgPngCar = base64_encode($carData['img_png']);
            $id_car = $carData['id_car'];
            if ($id_car % 2) {
                echo "<div class=\"cars__car-flex car-flex\">
                        <div class=\"car-flex__text-content\">
                            <div class=\"car-flex__text-content-heading\">
                                <h2>{$carData['name']}</h2>
                            </div>
                            <div class=\"car-flex__text-content-h3\">
                                <h3>{$carData['preview_main_choose_page']}</h3>
                            </div>
                            <div class=\"car-flex__text-content-show-more\">
                                <form action=\"show_more_car.php\" method=\"post\">
                                    <input type=\"hidden\" name=\"post_id_car\" value=\"{$carData['id_car']}\">
                                    <input type=\"submit\" value=\"Узнать больше\">
                                </form>
                            </div>
                            <div class=\"car-flex__text-content-book\">
                                <h3>Забронировать</h3>
                            </div>
                        </div>
                        <div class=\"car-flex__img-png\">
                            <img src=\"data:image/png;base64,$imgPngCar\" alt=\"errorUpImage\">
                        </div>
                    </div>";
            } else {
                echo "<div class=\"cars__car-flex car-flex\">
                        <div class=\"car-flex__img-png\">
                                <img src=\"data:image/png;base64,$imgPngCar\" alt=\"errorUpImage\">
                        </div>
                        <div class=\"car-flex__text-content\">
                            <div class=\"car-flex__text-content-heading\">
                                <h2>{$carData['name']}</h2>
                            </div>
                            <div class=\"car-flex__text-content-h3 car-flex__text-content-h3-right\">
                                <h3>{$carData['preview_main_choose_page']}</h3>
                            </div>
                            <div class=\"car-flex__text-content-show-more\">
                                <form action=\"show_more_car.php\" method=\"post\">
                                    <input type=\"hidden\" name=\"post_id_car\" value=\"{$carData['id_car']}\">
                                    <input type=\"submit\" value=\"Узнать больше\">
                                </form>
                            </div>
                            <div class=\"car-flex__text-content-book\">
                                <h3>Забронировать</h3>
                            </div>
                        </div>
                    </div>";
            }
        }
        ?>
    </section>
    <!-- Footer -->
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
    <script src="../js/script_registration_and_autorization.js"></script>
</body>

</html>