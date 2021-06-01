<?php
require_once 'connectDataBase.php';
if (!empty($_POST['id_user'])) {
    $id_user = $_POST['id_user'];
}
if (!empty($_POST['userPasport_number'])) {
    $userPasport_number = $_POST['userPasport_number'];
} else {
    $userPasport_number = null;
}

if (!empty($_POST['userPasport_series'])) {
    $userPasport_series = $_POST['userPasport_series'];
} else {
    $userPasport_series = null;
}

if (!empty($_POST['userDate_of_birth'])) {
    $userDate_of_birth = $_POST['userDate_of_birth'];
} else {
    $userDate_of_birth = null;
}
if ($userPasport_number != null && $userPasport_series != null && $userDate_of_birth != null) {
    $linkCarCityDataBase->query("UPDATE `passport_user` SET `pasport_number`='$userPasport_number',`pasport_series`='$userPasport_series',`Date_of_birth`='$userDate_of_birth' WHERE `id_user` = '$id_user'");
    header('location: ../page/user_account.php');
}
