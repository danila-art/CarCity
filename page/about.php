<!-- Страница -> о нас -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car City - О нас</title>
    <!-- header and footer style-->
    <link rel="shortcut icon" href="../img/logo/logo.png">
    <link rel="stylesheet" href="../css/main_style.css">
    <link rel="stylesheet" href="../css/style_autorization_registration.css">
    <link rel="stylesheet" href="../css/about_style.css">
    <!--header and footer font media -->
    <link rel="stylesheet" media="screen" href="../css/font_and_fontMedia.css">
    <link rel="stylesheet" media="screen" href="../css/media_block_style.css">
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
                        <h1><a href="choose_car_page.php">Choose Car</a></h1>
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
                        <div class=\"block-inner-2\"><h3><a href=\"../page/user_account.php\">Мой профиль</a></h3></div>
                        <div class=\"block-inner-3\"><a href=\"../php/exit_user.php\">Выйти</a></div>
                    </div>
                ";
            } else {
                echo "<div class=\"header__user\" id=\"buttonLogIn\">
                            <h1>Log<br>in</h1>
                        </div>";
            }
            ?>
        </div>
        <!-- header_content -->
        <div class="header__content">
            <div class="header__content-heading">
                <h2>Здесь вы можете больше узнать о компании</h2>
            </div>
            <div class="header__text-content">
                <h3>Главная задача компании CarCity – сделать такую услугу, как аренда элитных автомобилей доступной на
                    территории
                    Астраханской области и сделать вашу жизнь немного лучше
                    предоставив вам возможность взять в аренду автомобиль с восхитительным дизайном и невероятной
                    мощностью.</h3>
            </div>
        </div>
    </header>
    <section class="about-main">
        <div class="about-main__heading">
            <h2>О компании</h2>
        </div>
        <div class="about-main__flex-container">
            <div class="about-main__box-img">
                <img src="../img/about/cheerful-call-center-operators-during-working-process_74855-4003.jpg" alt="errorUpImage">
            </div>
            <div class="about-main__text">
                <h2>На сегодняшний день почти у каждой компании занимающейся арендой автомобилей есть свой сайт, приложение или иная платформа подачи информации и предоставление услуг по арендованию транспортных средств.</h2>
            </div>
        </div>
        <div class="about-main__flex-container">
            <div class="about-main__text">
                <h2>Сайт аренды элитных автомобилей CarCity, предназначенный для людей любого возраста. Для предоставление возможности арендовать дорогой автомобиль, который не каждый может себе позволить и получить новые ощущения. </h2>
            </div>
            <div class="about-main__box-img">
                <img src="../img/about/i.jpg" alt="errorUpImage">
            </div>
        </div>
        <div class="about-main__flex-container">
            <div class="about-main__box-img">
                <img src="../img/about/FFF_009.jpg" alt="errorUpImage">
            </div>
            <div class="about-main__text">
                <h2>Сайт компании служит для возможности как аренды транспортного средств, а также и предоставление информации автомобиля. На сайте информация находится в свободном доступе, как полная информация о компании, так и о автомобилях. Только авторизированные пользователи могут бронировать транспортное средство. </h2>
            </div>
        </div>
    </section>
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
    </script>
    <script src="../js/script_registration_and_autorization.js"></script>
</body>

</html>