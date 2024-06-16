<?php
require_once ("../../../include/db.php");
$file = $_FILES['file'];
$car_id = $_REQUEST['car_id'];
if ($file) {
    $fileName = $file["name"];
    $roat = "/image/" . $fileName;
    $path = $_SERVER["DOCUMENT_ROOT"] . "/image/" . $fileName;
    move_uploaded_file($file["tmp_name"], $path);
}
mysqli_query($esql, "INSERT INTO `photos` VALUES (NULL, '$car_id','$roat')");
header("Refresh: 0.1; url=/pages/admin/add.php?id=$car_id#extra_image");
?>