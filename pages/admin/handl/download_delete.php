<?php 
require_once("../../../include/db.php");
$id = $_REQUEST['id'];
mysqli_query($esql,"DELETE FROM `cars` WHERE `id` = '$id'");
header("refresh: 0.1; url=/pages/admin/show_car.php");
?>