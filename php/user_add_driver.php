<?php
require_once 'connectDataBase.php';
if (!empty($_POST['id_user'])) {
    $id_user = $_POST['id_user'];
}
if (!empty($_POST['userDriver_license_number'])) {
    $userDriver_license_number = $_POST['userDriver_license_number'];
} else {
    $userDriver_license_number = null;
}
if (!empty($_POST['userDriver_license_series'])) {
    $userDriver_license_series = $_POST['userDriver_license_series'];
} else {
    $userDriver_license_series = null;
}
if (!empty($_POST['userDate_of_issue'])) {
    $userDate_of_issue = $_POST['userDate_of_issue'];
} else {
    $userDate_of_issue = null;
}

if ($userDriver_license_number != null && $userDriver_license_series != null && $userDate_of_issue != null) {
    $linkCarCityDataBase->query("UPDATE `driver_license` SET `driver_license_number`='$userDriver_license_number',`driver_license_series`='$userDriver_license_series',`date_of_issue`='$userDate_of_issue' WHERE `id_user` = '$id_user'");
    header('location: ../page/user_account.php');
}
