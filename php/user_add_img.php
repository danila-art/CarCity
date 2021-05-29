<?php
require_once 'connectDataBase.php';
if (!empty($_POST['id_user'])) {
    $id_user = $_POST['id_user'];
}
if (!empty($_FILES['file']['name'])) {
    $imgUserName = $_FILES['file']['name'];
    $imgUser = addslashes(file_get_contents($_FILES['file']['tmp']));
    $linkCarCityDataBase->query("INSERT INTO `img_user`(`id_user`, `img_user_name`, `img_user_tmp`) VALUES ('$id_user','$imgUserName','$imgUser')");
    header('location: ../page/user_account.php');
    // Переделать запрос к базе данных
}
