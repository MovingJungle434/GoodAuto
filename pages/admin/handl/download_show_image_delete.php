<?php
require_once ("../../../include/db.php");

$id = $_REQUEST['id'];
$car_id = $_REQUEST['car_id'];

mysqli_query($esql, "DELETE FROM `photos` WHERE `id` = '$id'");
header("Refresh: 0.1; url=/pages/admin/add.php?id=$car_id");
?>