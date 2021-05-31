<?php
require_once 'connectDataBase.php';
if (!empty($_POST['id_user'])) {
    $id_user = $_POST['id_user'];
}
if (!empty($_FILES['file_add_img'])) {
    $imgUserName = $_FILES['file_add_img']['name'];
    $linkCarCityDataBase->query("UPDATE `img_user` SET `img_user_name`='$imgUserName',`img_user_tmp`='$imgUser' WHERE `id_user`='$id_user'");
    header('location: ../page/user_account.php');
}
