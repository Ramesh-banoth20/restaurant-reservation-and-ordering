<?php
include_once('header.php');
include_once('../controller/SessionCheck.php');

// Database connection
$conn = mysqli_connect('localhost', 'root', 'ramesh@2005', 'test');

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_GET['order_id'])) {
    $order_id = (int)$_GET['order_id'];
    
    // Get order details
    $query = "SELECT * FROM bookings WHERE id = $order_id";
    $result = mysqli_query($conn, $query);
    
    if ($row = mysqli_fetch_assoc($result)) {
?>
<!DOCTYPE html>
<html>
<head>
    <title>Order Confirmation - Tasty Trails</title>
    <link rel="stylesheet" type="text/css" href="../css/HomePage.css">
    <link rel="stylesheet" type="text/css" href="../css/food_booking.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        .confirmation-container {
            max-width: 800px;
            margin: 40px auto;
            padding: 30px;
            background-color: #fff;
            border-radius: 12px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }
        .success-message {
            text-align: center;
            color: #28a745;
            margin-bottom: 30px;
        }
        .success-icon {
            font-size: 48px;
            margin-bottom: 20px;
        }
        .order-details {
            background-color: #f8f8f8;
            padding: 20px;
            border-radius: 8px;
            margin-top: 20px;
        }
        .order-details h3 {
            color: #3d4152;
            border-bottom: 2px solid #fc8019;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }
        .detail-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 15px;
            padding-bottom: 15px;
            border-bottom: 1px solid #eee;
        }
        .detail-label {
            font-weight: 500;
            color: #3d4152;
        }
        .detail-value {
            color: #686b78;
        }
        .total-price {
            font-size: 20px;
            color: #fc8019;
            font-weight: bold;
        }
        .back-button {
            display: inline-block;
            background-color: #fc8019;
            color: white;
            padding: 12px 24px;
            border-radius: 6px;
            text-decoration: none;
            margin-top: 20px;
            transition: background-color 0.3s ease;
        }
        .back-button:hover {
            background-color: #e76f00;
        }
    </style>
</head>
<body>
    <div class="confirmation-container">
        <div class="success-message">
            <i class="fas fa-check-circle success-icon"></i>
            <h2>Order Confirmed!</h2>
            <p>Your order has been placed successfully.</p>
        </div>

        <div class="order-details">
            <h3>Order Details</h3>
            <div class="detail-row">
                <span class="detail-label">Order ID:</span>
                <span class="detail-value">#<?php echo $row['id']; ?></span>
            </div>
            <div class="detail-row">
                <span class="detail-label">Item:</span>
                <span class="detail-value"><?php echo htmlspecialchars($row['food_name']); ?></span>
            </div>
            <div class="detail-row">
                <span class="detail-label">Quantity:</span>
                <span class="detail-value"><?php echo $row['quantity']; ?></span>
            </div>
            <div class="detail-row">
                <span class="detail-label">Table Number:</span>
                <span class="detail-value"><?php echo $row['table_number']; ?></span>
            </div>
            <div class="detail-row">
                <span class="detail-label">Date:</span>
                <span class="detail-value"><?php echo $row['dining_date']; ?></span>
            </div>
            <div class="detail-row">
                <span class="detail-label">Time:</span>
                <span class="detail-value"><?php echo $row['dining_time']; ?></span>
            </div>
            <div class="detail-row">
                <span class="detail-label">Payment Method:</span>
                <span class="detail-value"><?php echo ucfirst($row['payment_method']); ?></span>
            </div>
            <div class="detail-row">
                <span class="detail-label">Total Amount:</span>
                <span class="detail-value total-price">$<?php echo number_format($row['total_price'], 2); ?></span>
            </div>
        </div>

        <center>
            <a href="VarifiedUserIndex.php" class="back-button">Back to Menu</a>
        </center>
    </div>
</body>
</html>
<?php
    } else {
        // Order not found
        header("Location: VarifiedUserIndex.php");
        exit();
    }
} else {
    // No order ID provided
    header("Location: VarifiedUserIndex.php");
    exit();
}

mysqli_close($conn);
?> 