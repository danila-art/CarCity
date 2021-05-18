<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CarCity - Главная страница</title>
    <link rel="stylesheet" href="css/main_style.css">
    <link rel="shortcut icon" href="img/logo/logo.png">
    <link rel="stylesheet" href="css/style_autorization_registration.css">
    <link rel="stylesheet" media="screen" href="css/font_and_fontMedia.css">
    <link rel="stylesheet" media="screen" href="css/media_block_style.css">
</head>

<body>
    <section class="block-autorization-and-registration" id="moduleBlockRegAuto">
        <div class="block-registration" id="blockRegistration">
            <!-- box-animate -->
            <div class="block-animate__bar block-animate__top"></div>
            <div class="block-animate__bar block-animate__right block-animate__delay"></div>
            <div class="block-animate__bar block-animate__bottom block-animate__delay"></div>
            <div class="block-animate__bar block-animate__left"></div>
            <div class="block__close">
                <img src="img/icons/cancel-white.png" alt="errorUpImage">
            </div>
            <div class="block-registration__heading">
                <h3>Регистрация</h3>
            </div>
            <div class="block-registration__form-registration">
                <form action="php/registration_user.php" method="post" id="formRegistrattion">
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
                <img src="img/icons/cancel-white.png" alt="errorUpImage">
            </div>
            <div class="block-autorization__heading">
                <h3>Авторизация</h3>
            </div>
            <div class="block-autorization__form-autorization">
                <form action="php/autorization_user.php" method="post" id="formAutorization">
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
    <header class="header">
        <div class="header__line">
            <div class="header__logo">
                <img src="img/logo/logo.png" alt="">
            </div>
            <div class="header__nav">
                <div class="header__flex-nav">
                    <div class="header__nav-block-flex">
                        <h1><a href="">Home</a></h1>
                        <h1><a href="page/choose_car_page.php">Choose Car</a></h1>
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
                    echo "Пользователь есть";
                } else {
                    echo "<div class=\"header__user\" id=\"buttonLogIn\">
                            <h1>Log<br>in</h1>
                        </div>";
                }
                
            ?>

        </div>
        <div class="header__content">
            <div class="header__content-flex">
                <div class="header__content-text">
                    <div class="header__h2">
                        <h2>Mercedes-AMG GT</h2>
                    </div>
                    <div class="header__content-text-h3">
                        <h3>Модель представляет собой восхитительный Gran Turismo с 4,0-литровым двигателем V8
                            AMG с
                            двойным турбонаддувом. AMG GT S
                            и AMG GT R выводят спортивную мощь AMG на новый уровень.</h3>
                    </div>
                    <div class="header__content-button">
                        <h3>Узнать больше</h3>
                    </div>
                </div>
                <div class="container__content-img">
                    <div class="container__content-box-img">
                        <img src="img/header/mersedes.png" alt="errorUpImage">
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section class="animate-section">
        <div class="animate-section__line" id="progress_line"></div>
    </section>
    <section class="advantages">
        <div class="advantages__heading">
            <div class="advantages__heading-mixed">
                <h2>Почему</h2>
                <h1>Carcity?</h1>
            </div>
            <div class="advantages__box-flex">
                <div class="advantages__advantage-block advantageBlock1" id="advantageBlock1" data-active="0" onclick="slideClick(this)">
                    <div class="advantageBlock__heading">
                        <h3>Мы заботимся<br> о вас</h3>
                    </div>
                    <div class="advantageBlock__advantage-img">
                        <img src="img/advantages/coffee.png" alt="errorUpImage">
                    </div>
                    <div class="advantageBlock__content-text">
                        <h3></h3>
                    </div>
                </div>
                <div class="advantages__advantage-block advantageBlock2" id="advantageBlock2" data-active="0" onclick="slideClick(this)">
                    <div class="advantageBlock__heading">
                        <h3>Высококвалифицированный
                            персонал</h3>
                    </div>
                    <div class="advantageBlock__advantage-img">
                        <img src="img/advantages/personal.png" alt="errorUpImage">
                    </div>
                    <div class="advantageBlock__content-text">
                        <h3></h3>
                    </div>
                </div>
                <div class="advantages__advantage-block advantages__active" id="advantageBlock3" data-active="1" onclick="slideClick(this)">
                    <div class="advantageBlock__heading">
                        <h2>13</h2>
                        <h3>Суперкаров для вас</h3>
                    </div>
                    <div class="advantageBlock__advantage-img">
                        <img src="img/advantages/car-rental.png" alt="errorUpImage">
                    </div>
                    <div class="advantageBlock__content-text">
                        <h3>Отлчиный выбор из 13 элитных автомобилей, весьма привлекательных, мощных и ухоженных. Про
                            каждый из которых есть возможность просмотреть фотографии внешнего дизайна и салона, а также
                            просмотреть технические характеристики.</h3>
                    </div>
                </div>
                <div class="advantages__advantage-block advantageBlock4" id="advantageBlock4" data-active="0" onclick="slideClick(this)">
                    <div class="advantageBlock__heading">
                        <h3>Гарантии <br>превыше всего</h3>
                    </div>
                    <div class="advantageBlock__advantage-img">
                        <img src="img/advantages/garantii.png" alt="errorUpImage">
                    </div>
                    <div class="advantageBlock__content-text">
                        <h3></h3>
                    </div>
                </div>
                <div class="advantages__advantage-block advantageBlock5" id="advantageBlock5" data-active="0" onclick="slideClick(this)">
                    <div class="advantageBlock__heading">
                        <h3>Мы на любом<br> устройстве</h3>
                    </div>
                    <div class="advantageBlock__advantage-img">
                        <img src="img/advantages/platform.png" alt="errorUpImage">
                    </div>
                    <div class="advantageBlock__content-text">
                        <h3></h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="new-model">
        <div class="new-model__heading">
            <h3>Новая модель</h3>
            <h2>porche 911 turbo</h2>
        </div>
        <div class="new-model__flex-box">
            <div class="new-model__box-1" id="newModelBox1"></div>
            <div class="new-model__box-2" id="newModelBox2"></div>
            <div class="new-model__box-3" id="newModelBox3"></div>
        </div>
    </section>
    <section class="animate-section">
        <div class="animate-section__line"></div>
    </section>
    <section class="popular-cars">
        <div class="popular-cars__heading">
            <h3>Популярные машины</h3>
        </div>
        <div class="popular-cars__car-block">
            <div class="popular-cars__car-block-flex">
                <div class="popular-cars__car-block-content">
                    <div class="popular-cars__content-h2">
                        <h2>Nissan GTR 35</h2>
                    </div>
                    <div class="popular-cars__content-h3">
                        <h3>Самый быстрый автомобиль, выпускаемый серийно компанией Nissan, это многим известный
                            спорткар Nissan GT-R 2019-2020 с
                            большими характеристиками, который обрел достаточно большую популярность с момента своего
                            выхода.</h3>
                    </div>
                    <div class="popular-cars__content-button-show">
                        <h3>Узнать больше</h3>
                    </div>
                    <div class="popular-cars__content-botton-book">
                        <h3>Забронировать</h3>
                    </div>
                </div>
                <div class="popular-cars__car-block-img">
                    <img src="img/header_popular_car/nissan_gtr_35_blue.png" alt="errorUpImage">
                </div>
            </div>
        </div>
        <div class="popular-cars__car-block">
            <div class="popular-cars__car-block-flex">
                <div class="popular-cars__car-block-img">
                    <img src="img/header_popular_car/honda_nsx_2019.png" alt="errorUpImage">
                </div>
                <div class="popular-cars__car-block-content">
                    <div class="popular-cars__content-h2">
                        <h2>HONDA NSX</h2>
                    </div>
                    <div class="popular-cars__content-h3-right">
                        <h3>Это один из легендарных японский спортивных автомобилей, так что можно с уверенностью
                            сказать, что Хонда смогла сделать
                            действительно хороший спортивный автомобиль, который обладает красивым дизайном, комфортом в
                            салоне и мощным двигателем,
                            созданным специально для Honda NSX.</h3>
                    </div>
                    <div class="popular-cars__content-button-show">
                        <h3>Узнать больше</h3>
                    </div>
                    <div class="popular-cars__content-botton-book">
                        <h3>Забронировать</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="popular-cars__car-block">
            <div class="popular-cars__car-block-flex">
                <div class="popular-cars__car-block-content">
                    <div class="popular-cars__content-h2">
                        <h2>Lamborghini Gallardo</h2>
                    </div>
                    <div class="popular-cars__content-h3">
                        <h3>Самый популярный автомобиль, который выпустила компания Lamborghini (Ламборгини) это
                            Lamborghini Gallardo LP560-4 и
                            570-4. Этот автомобиль был самым выпускаемым спорткаром из всей линейки Lamborghini, не одна
                            модель не была выпущена
                            столько раз, сколько было выпущено этой. Код автомобиля – “L140”.</h3>
                    </div>
                    <div class="popular-cars__content-button-show">
                        <h3>Узнать больше</h3>
                    </div>
                    <div class="popular-cars__content-botton-book">
                        <h3>Забронировать</h3>
                    </div>
                </div>
                <div class="popular-cars__car-block-img">
                    <img src="img/header_popular_car/Lamborghini_Gallardo_black.png" alt="errorUpImage">
                </div>
            </div>
        </div>
    </section>
    <section class="animate-section">
        <div class="animate-section__line"></div>
    </section>
    <section class="about">
        <div class="about__heading">
            <h3>О нас</h3>
        </div>
        <div class="about__content">
            <div class="about__content-h3">
                <h3>Главная задача компании CarCity – сделать такую услугу, как аренда элитных автомобилей доступной на
                    территории
                    Астраханской области и сделать вашу жизнь немного лучше
                    предоставив вам возможность взять в аренду автомобиль с восхитительным дизайном и невероятной
                    мощностью.</h3>
            </div>
            <div class="about__button-show">
                <h3>О нас больше</h3>
            </div>

        </div>
    </section>
    <footer class="footer">
        <div class="footer__logo-animate">
            <div class="footer__neon-left-shell">
                <div class="footer__neon-left footer-neon"></div>
            </div>
            <div class="footer__logo-img">
                <img src="img/logo/logo.png" alt="errorUpImage">
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
                        <img src="img/social-media-app-icons-collection/facebook.png" alt="errorUpImage">
                    </div>
                    <div class="footer__social-box">
                        <img src="img/social-media-app-icons-collection/instagram.png" alt="errorUpImage">
                    </div>
                    <div class="footer__social-box">
                        <img src="img/social-media-app-icons-collection/twitter.png" alt="errorUpImage">
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
    </script>
    <script src="js/main_script.js"></script>
    <script src="js/script_registration_and_autorization.js"></script>
</body>

</html>