<?php
include_once('../controller/sessionCheck.php');

if (!isset($_SESSION['booking_details'])) {
    header("Location: VarifiedUserIndex.php");
    exit();
}

$booking = $_SESSION['booking_details'];
$foodname = $booking['food_name'];
$quantity = $booking['quantity'];
$price = str_replace('$', '', $booking['food_price']);
$totalamount = $quantity * $price;

$_SESSION['totalamount'] = $totalamount;
?>

<html>
    <head>
        <title>Payment</title>
        <link rel="stylesheet" type="text/css" href="../css/HomePage.css">
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f4f4f4;
                margin: 0;
                padding: 20px;
            }
            fieldset {
                max-width: 500px;
                margin: 20px auto;
                padding: 20px;
                background: white;
                border-radius: 8px;
                box-shadow: 0 0 10px rgba(0,0,0,0.1);
            }
            h2 {
                color: #333;
                text-align: center;
            }
            .payment-details {
                margin: 20px 0;
            }
            .payment-details b {
                color: #555;
            }
            select, input[type="text"], input[type="number"] {
                width: 100%;
                padding: 8px;
                margin: 5px 0;
                border: 1px solid #ddd;
                border-radius: 4px;
            }
            input[type="submit"] {
                background-color: #4CAF50;
                color: white;
                padding: 10px 15px;
                border: none;
                border-radius: 4px;
                cursor: pointer;
                width: 100%;
            }
            input[type="submit"]:hover {
                background-color: #45a049;
            }
        </style>
    </head>
    <body>
        <form action="../controller/paymentCheck.php" method="post">
            <fieldset>
                <h2>Payment Details</h2>
                <div class="payment-details">
                    <b>Food: <?php echo htmlspecialchars($foodname); ?></b><br>
                    <b>Quantity: <?php echo $quantity; ?></b><br>
                    <b>Price per item: $<?php echo $price; ?></b><br>
                    <b>Total amount: $<?php echo $totalamount; ?></b><br><br>
                    
                    <label for="paymenttype">Payment Type:</label>
                    <select name="paymenttype" id="paymenttype" required>
                        <option value="cash">Cash</option>
                        <option value="card">Card</option>
                    </select><br><br>

                    <label for="address">Address:</label>
                    <input type="text" name="address" id="address" required><br><br>
                    
                    <label for="amountpaid">Amount to Pay:</label>
                    <input type="number" name="amountpaid" id="amountpaid" value="<?php echo $totalamount; ?>" required><br><br>
                </div>
                
                <input type="submit" name="submit" value="Pay">
            </fieldset>
        </form>
    </body>
</html>
