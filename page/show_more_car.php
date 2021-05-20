<!-- Страница -> узнать больше о оределенной машине -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car City - Ваш Аккаунт</title>
    <!-- header and footer style-->
    <link rel="stylesheet" href="../css/main_style.css">
    <link rel="stylesheet" href="../css/style_autorization_registration.css">
    <link rel="stylesheet" href="../css/show_more_car_style.css">
    <!--header and footer font media -->
    <link rel="stylesheet" media="screen" href="../css/font_and_fontMedia.css">
    <!-- font media this page -->
    <link rel="stylesheet" href="../css/show_more_car_fontMedia.css">
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
                        <div class=\"block-inner-2\"><h3>Мой профиль</h3></div>
                        <div class=\"block-inner-3\"><h3>Выйти</h3></div>
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
        if (!empty($_POST['post_id_car'])) {
            $id_car = $_POST['post_id_car'];
        }
        require_once '../php/connectDataBase.php';
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
                        <h3>Забронировать</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </header>
    <section class="cars-more">

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