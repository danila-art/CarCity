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
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car City - <? echo $loginUser ?></title>
    <!-- header and footer style-->
    <link rel="stylesheet" href="../css/main_style.css">
    <link rel="stylesheet" href="../css/style_autorization_registration.css">
    <!--header and footer font media -->
    <link rel="stylesheet" media="screen" href="../css/font_and_fontMedia.css">
    <link rel="stylesheet" media="screen" href="../css/media_block_style.css">
    <!-- font media this page -->
</head>

<body>
    <div class="mk-spinner-wrap">
        <div class="mk-spinner-ring"></div>
    </div>
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
                        <h1><a href="show_more_car.php">Choose Car</a></h1>
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
            $resultUser = $linkCarCityDataBase->query("SELECT `user`.`surname`, `user`.`name`, `user`.`patronymic`, `user`.`login`, `img_user`.`img_user_tmp`, `passport_user`.`pasport_number`,`passport_user`.`pasport_series`,`passport_user`.`Date_of_birth`,`passport_user`.`Gender`, `driver_license`.`driver_license_number`, `driver_license`.`driver_license_series`, `driver_license`.`date_of_issue` FROM `user` INNER JOIN `passport_user` ON `passport_user`.`id_user` = `user`.`id_user` INNER JOIN `driver_license` ON `driver_license`.`id_user` = `user`.`id_user` INNER JOIN `img_user` ON `user`.`id_user` = `img_user`.`id_user` AND `user`.`id_user` = '$id_user';");
            while ($userAssok = mysqli_fetch_assoc($resultUser)) {
                $userSurname = $userAssok['surname'];
                $userName = $userAssok['name'];
                $userPatronymic = $userAssok['patronymic'];
                $userLogin = $userAssok['login'];
                $userImg_user_tmp = $userAssok['img_user_tmp'];
                $userPasport_number = $userAssok['pasport_number'];
                $userPasport_series = $userAssok['pasport_series'];
                $userDate_of_birth = $userAssok['Date_of_birth'];
                $userGender = $userAssok['Gender'];
                $userDriver_license_number = $userAssok['driver_license_number'];
                $userDriver_license_series = $userAssok['driver_license_series'];
                $userDate_of_issue = $userAssok['date_of_issue'];
            }
            ?>
            <div class="header-content-user__flex">
                <div class="header-content-user__img-user"></div>
                <div class="header-content-user__text-container">
                    <div class="header-content-user__progress-container">
                        <div class="header-content-user__progress-line"></div>
                    </div>

                </div>
            </div>
        </div>
    </header>
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
</body>

</html>