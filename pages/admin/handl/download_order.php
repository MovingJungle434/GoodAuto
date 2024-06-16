<?php
require_once ("../../../include/db.php");
$name = htmlspecialchars($_REQUEST['name']);
$email = htmlspecialchars($_REQUEST['email']);
$phone = htmlspecialchars($_REQUEST['phone']);
$order = htmlspecialchars($_REQUEST['order_menu_hidden']);
mysqli_query($esql, "INSERT INTO `orders` VALUES (null, '$name', '$email', '$phone', '$order')");
$common = mysqli_query($esql, "SELECT * FROM `orders` WHERE `name` = '$name' AND `email` = '$email' AND `phone` = '$phone' AND `order` = '$order'");
$resalt = $common->fetch_assoc();
header('refresh: 0.1; url=/');
?>