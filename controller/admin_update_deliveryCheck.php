<?php
    include_once('../model/operationModel.php');
    session_start();

    if (!isset($_SESSION['username']) || $_SESSION['user_type'] !== 'admin') {
        header('Location: ../view/login.php');
        exit();
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $tracking_key = $_POST['tracking_key'];
        $estimated_ready_time = $_POST['ERT'];
        $preparation_status = $_POST['preparation_status'];

        if (updateDelivery($tracking_key, $estimated_ready_time, $preparation_status)) {
            header('Location: ../view/admin_update_delivery.php?success=1');
        } else {
            header('Location: ../view/admin_update_delivery.php?error=1');
        }
        exit();
    }
?>

<html>
    <body>
        <hr>
        <a href="../view/admin_update_delivery.php"> Back </a> |
        <a href="../controller/logout.php"> logout </a>
    </body>
</html>