<?php
require_once ("../../../include/db.php");
mysqli_query($esql, "INSERT INTO `cars` VALUES (null, null, null, null, null, null, null, null, null, null, null)");
header('refresh: 0.1; url=/pages/admin/choose.php');
?>