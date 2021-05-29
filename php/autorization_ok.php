<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Авторизация</title>
    <link rel="shortcut icon" href="../img/logo/logo.png">
    <link rel="stylesheet" href="../css/style_out_put.css">
</head>


<body>
    <div class="mk-spinner-wrap">
        <div class="mk-spinner-ring"></div>
    </div>
    <?php
    if (!empty($_COOKIE['loginUser'])) {
        echo "<section class=\"output\">
                <div class=\"output__box\">
                    <div class=\"block-animate__bar block-animate__top\"></div>
                    <div class=\"block-animate__bar block-animate__right block-animate__delay\"></div>
                    <div class=\"block-animate__bar block-animate__bottom block-animate__delay\"></div>
                    <div class=\"block-animate__bar block-animate__left\"></div>
                    <div class=\"output__h3\">
                        <h3>Вы успешно вошли</h3>
                    </div>
                    <div class=\"output__button-main\">
                        <h3><a href=\"../\">Вернуться на главную</a></h3>
                    </div>
                </div>
            </section>";
    }
    ?>
    <script>
        window.onload = function() {
            window.setTimeout(function() {
                document.querySelector('.mk-spinner-wrap').style.display = 'none';
            }, 1000);
        }
    </script>
</body>

</html>