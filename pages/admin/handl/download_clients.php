<?php
require_once ("../../../include/db.php");
session_start();
$name = htmlspecialchars($_REQUEST['name']);
$email = htmlspecialchars($_REQUEST['email']);
$phone = htmlspecialchars($_REQUEST['phone']);
mysqli_query($esql, "INSERT INTO `clients` VALUES (null, '$name', '$email', '$phone', null)");
$common = mysqli_query($esql, "SELECT * FROM `clients` WHERE `fullName` = '$name' AND `email` = '$email' AND `phone` = '$phone'");
$resalt = $common->fetch_assoc();
if (!empty($resalt)) {
    session_start();
    $_SESSION['id'] = $resalt['id'];
    $_SESSION['name'] = $resalt['fullName'];
    $_SESSION['email'] = $resalt['email'];
    $_SESSION['phone'] = $resalt['phone'];
    $_SESSION['admin'] = $resalt['admin'];
}
header('refresh: 0.1; url=/#form');
?>