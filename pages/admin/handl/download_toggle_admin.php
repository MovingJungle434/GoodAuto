<?php
require_once ("../../../include/db.php");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $client_id = $_REQUEST['client_id'];
    $action = $_REQUEST['action'];

    if ($action === 'make_admin') {
        $stmt = mysqli_prepare($esql, "UPDATE `clients` SET `admin` = 1 WHERE `id` = ?");
    } elseif ($action === 'remove_admin') {
        $stmt = mysqli_prepare($esql, "UPDATE `clients` SET `admin` = NULL WHERE `id` = ?");
    }

    mysqli_stmt_bind_param($stmt, "i", $client_id);

    if (mysqli_stmt_execute($stmt)) {
        header("refresh: 0.1; url=/pages/admin/clients.php");
        exit;
    } else {
        echo "Database update failed.";
    }

    mysqli_stmt_close($stmt);
}
?>