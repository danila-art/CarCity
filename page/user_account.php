<!-- Страница -> аккаунт пользователя -->
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
    <!--header and footer font media -->
    <link rel="stylesheet" media="screen" href="../css/font_and_fontMedia.css">
</head>

<body>
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
        <!-- header_content -->
    </header>
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
</body>

</html>