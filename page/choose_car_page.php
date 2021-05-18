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
            <div class="header__user" id="buttonLogIn">
                <h1>Log<br>in</h1>
            </div>
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
                        <img src="../img/cars_png/kisspng-porsche-911-turbo-s-cabriolet-porsche-930-sports-c-black-porsche-911-turbo-car-5a748d924b5d79.0030889815175878583087.png"
                            alt="errorUpImage">
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

    </section>

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
    </script>
    <script src="../js/script_registration_and_autorization.js"></script>
</body>

</html>