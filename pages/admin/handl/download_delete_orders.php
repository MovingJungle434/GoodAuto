<?php
require_once ("../../../include/db.php");
$id = $_REQUEST['id'];
mysqli_query($esql, "DELETE FROM `orders` WHERE `id` = '$id'");
header("refresh: 0.1; url=/pages/admin/clients_orders.php");
?>