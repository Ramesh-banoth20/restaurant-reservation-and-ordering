<?php
    //include_once('../controller/sessionCheck.php');
    //session_start();
    include_once('../model/operationModel.php');
    $orders = getAllOrders();
    include_once('../controller/sessionCheck.php');
?>

<html>
<head>
    <title>Update Order Status</title>
    <script src="../js/admin_update_deliveryCheck.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/admin_update_delivery.css">
</head>
<body>

    <h1>Orders</h1>
    <table border="1">
        <tr>
            <th>Tracking Key</th>
            <th>Estimated Ready Time</th>
            <th>Preparation Status</th>
        </tr>
        <?php foreach ($orders as $order): ?>
            <tr>
                <td align="center"><?php echo htmlspecialchars($order['tracking_key']); ?></td>
                <td align="center"><?php echo htmlspecialchars($order['estimated_ready_time']); ?></td>
                <td align="center"><?php echo htmlspecialchars($order['preparation_status']); ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <br><hr>

    <h1>Update Order Status</h1>
    <form action="../controller/admin_update_deliveryCheck.php" method="post" onsubmit="return validateAndSubmit()">
        <label for="tracking_key">Enter Tracking Key:</label>
        <input type="text" name="tracking_key" id="tracking_key" required> <br> <hr>
        
        <label for="ERT">Estimated Ready Time:</label>
        <input type="time" id="ERT" name="ERT"> <br> <hr>

        <label for="preparation_status">Preparation Status:</label>
            <select name="preparation_status" id="preparation_status">
                <option value="pending">Pending</option>
                <option value="preparing">Preparing</option>
                <option value="ready">Ready</option>
            </select> <br> <hr>

        <input type="submit" name="submit" value="Update Status">
    </form>

    <br>
    <br>

    <a href="AdminIndex.php"> Back </a> |
    <a href="../controller/LogoutCheck.php"> logout </a>

</body>
</html>