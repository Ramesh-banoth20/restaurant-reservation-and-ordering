<?php
require_once('../model/orderModel.php');
require_once('../model/db.php');
session_start();

// Check if user is logged in
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}

// Get the latest order for the current user
$orders = getOrderhistory($_SESSION['username']);
$latestOrder = end($orders); // Get the most recent order
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Status</title>
    <link rel="stylesheet" href="../assets/css/track_delivery.css">
</head>
<body>
    <div class="container">
        <h1>Order Status</h1>
        
        <?php if ($latestOrder): ?>
            <div class="order-details">
                <h2>Order Details</h2>
                <p><strong>Food Item:</strong> <?php echo htmlspecialchars($latestOrder['food_name']); ?></p>
                <p><strong>Quantity:</strong> <?php echo htmlspecialchars($latestOrder['food_quantity']); ?></p>
                <p><strong>Total Amount:</strong> $<?php echo htmlspecialchars($latestOrder['total_amount']); ?></p>
                <p><strong>Order Date:</strong> <?php echo date('Y-m-d H:i:s'); ?></p>
                <p><strong>Delivery Address:</strong> <?php echo htmlspecialchars($latestOrder['adress']); ?></p>
            </div>

            <div class="status-section">
                <h2>Status</h2>
                <p>Your order is being prepared</p>
                <p>Estimated ready time: 15 minutes</p>
            </div>
        <?php else: ?>
            <div class="no-orders">
                <p>No orders found. Please place an order first.</p>
            </div>
        <?php endif; ?>

        <div class="navigation-links">
            <a href="VarifiedUserIndex.php">Back to Menu</a>
            <a href="../controller/logout.php">Logout</a>
        </div>
    </div>
</body>
</html>