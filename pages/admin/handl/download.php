<?php
require_once ("../../../include/db.php");

$id = $_REQUEST['id'];
$name = $_REQUEST['name'];
$origin = $_REQUEST['origin'];
$mileage = $_REQUEST['mileage'];
$cubic_capacity = $_REQUEST['cubic_capacity'];
$power = $_REQUEST['power'];
$fuel = $_REQUEST['fuel'];
$availability = $_REQUEST['availability'];
$vehicle_condition = $_REQUEST['vehicle_condition'];
$price = $_REQUEST['price'];
$main_image = $_FILES['main_image'];

if ($main_image['name'] != '') {
    $fileName = $main_image["name"];
    $roat = "/image/" . $fileName;
    $path = $_SERVER["DOCUMENT_ROOT"] . "/image/" . $fileName;
    move_uploaded_file($main_image["tmp_name"], $path);
    mysqli_query($esql,"UPDATE `cars` SET `name` = '$name', `origin` = '$origin', `mileage` = '$mileage', `cubic_capacity` = '$cubic_capacity', `power` = '$power', `fuel` = '$fuel', `availability` = '$availability', `vehicle_condition` = '$vehicle_condition', `price` = '$price', `main_image` = '$roat' WHERE `id` = '$id'");
} else {
    mysqli_query($esql,"UPDATE `cars` SET `name` = '$name', `origin` = '$origin', `mileage` = '$mileage', `cubic_capacity` = '$cubic_capacity', `power` = '$power', `fuel` = '$fuel', `availability` = '$availability', `vehicle_condition` = '$vehicle_condition', `price` = '$price' WHERE `id` = '$id'");
}
header("Refresh: 0.1; url=/pages/admin/add.php?id=$id");