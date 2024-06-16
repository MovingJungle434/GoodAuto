<?php
require_once ("../../../include/db.php");
$id = $_REQUEST['id'];
$order = mysqli_query($esql,"SELECT * FROM `orders` WHERE `id` = '$id'");
$end = $order->fetch_assoc();
$name = $end['name'];
$email = $end['email'];
$phone = $end['phone'];

mysqli_query($esql,"INSERT INTO `clients` VALUES (null, '$name', '$email', '$phone', null)");

header("refresh: 0.1; url=/pages/admin/clients_orders.php")
?>