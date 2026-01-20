<?php
session_start();

// Retrieve and update item quantities from the form
$burgerQuantity = isset($_POST['burger-quantity']) ? max((int)$_POST['burger-quantity'], 0) : 0;


$userName = isset($_POST['userName']) ? htmlspecialchars($_POST['userName']) : '';
$address = isset($_POST['address']) ? htmlspecialchars($_POST['address']) : '';
$number = isset($_POST['number']) ? htmlspecialchars($_POST['number']) : '';
$paymentMethod = isset($_POST['payment']) ? htmlspecialchars($_POST['payment']) : '';

// Calculate the prices for each item
$burgerPrice = $burgerQuantity * 8.99;


// Calculate the total amount
$totalAmount = $burgerPrice;

if ($totalAmount > 20.00) {
    $discountPercentage = 0.20; // 20% discount
    $discountAmount = $totalAmount * $discountPercentage;

    $maxDiscount = 10.00;
    $discountAmount = min($discountAmount, $maxDiscount);

    $totalAmount -= $discountAmount;
} else {
    $discountAmount = 0; // No discount applied
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get customer details from the form
    $address = isset($_POST['address']) ? $_POST['address'] : '';
    $number = isset($_POST['number']) ? $_POST['number'] : '';
    $payment = isset($_POST['payment']) ? $_POST['payment'] : '';
    $pin = isset($_POST['pin']) ? $_POST['pin'] : '';
    $expiry = isset($_POST['expiry']) ? $_POST['expiry'] : '';

    // Connect to the database (replace these with your actual database credentials)
    $dbHost = 'localhost';
    $dbUser = 'root';
    $dbPassword = '';
    $dbName = 'test';

    $conn = new mysqli($dbHost, $dbUser, $dbPassword, $dbName);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Insert order details into the database
    $sql = "INSERT INTO orders (burgerQuantity, totalAmount, address, number, payment)
            VALUES (?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("idsis", $burgerQuantity, $totalAmount, $address, $number, $payment);

    // Execute the prepared statement
    if ($stmt->execute()) {
        // Order successfully saved
        header("Location: ../view/receipt.php"); // Redirect to the receipt page or any other page
        exit();
    } else {
        // Error in saving the order
        echo "Error: " . $stmt->error;
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receipt</title>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/receipt.css">
    <script>
        $(document).ready(function() {
            // Make an AJAX request to get the username
            $.ajax({
                url: 'getUsername.php',
                type: 'GET',
                success: function(data) {
                    // Update the username field with the retrieved username
                    $('#username').text(data);
                },
                error: function() {
                    console.error('Error fetching username.');
                }
            });
        });
    </script>
</head>
<body>
    <ul class="navbar">
        <li>
            <img src="../Image/logo.jpg" alt="Famished Logo">
        </li>
        <li>
            <a class="logout-button" href="Login.html">Logout</a>
        </li>
        
    </ul>
    <div>
        <h1>Receipt</h1>
        <br>
        <h2>Thank You <span id="username"></span> for choosing Famished Fox!</h2>
        <h3>Your order has been confirmed</h3>
        
</body>
</html>
