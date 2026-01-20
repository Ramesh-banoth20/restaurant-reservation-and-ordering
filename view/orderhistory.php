<?php
include_once('../controller/sessionCheck.php');

// Database connection
$conn = mysqli_connect('localhost', 'root', 'ramesh@2005', 'test');

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get all orders for the current user
$username = isset($_SESSION['username']) ? $_SESSION['username'] : '';
$query = "SELECT * FROM orderhistory WHERE username = '$username' ORDER BY date DESC";
$result = mysqli_query($conn, $query);

?>
<html>
    <head>
        <title>Order History</title>
        <link rel="stylesheet" type="text/css" href="../css/HomePage.css">
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f4f4f4;
                margin: 0;
                padding: 20px;
            }
            .order-container {
                max-width: 1000px;
                margin: 20px auto;
                background: white;
                padding: 20px;
                border-radius: 8px;
                box-shadow: 0 0 10px rgba(0,0,0,0.1);
            }
            h1 {
                color: #333;
                text-align: center;
                margin-bottom: 30px;
            }
            table {
                width: 100%;
                border-collapse: collapse;
                margin-top: 20px;
            }
            th, td {
                padding: 12px;
                text-align: left;
                border-bottom: 1px solid #ddd;
            }
            th {
                background-color: #f8f8f8;
                color: #333;
            }
            tr:hover {
                background-color: #f5f5f5;
            }
            .back-button {
                display: inline-block;
                background-color: #fc8019;
                color: white;
                padding: 10px 20px;
                text-decoration: none;
                border-radius: 4px;
                margin-top: 20px;
            }
            .back-button:hover {
                background-color: #e76f00;
            }
        </style>
    </head>
    <body>
        <div class="order-container">
            <h1>Your Order History</h1>
            <table>
                <tr>
                    <th>Order ID</th>
                    <th>Food Item</th>
                    <th>Quantity</th>
                    <th>Total Amount</th>
                    <th>Payment Type</th>
                    <th>Amount Paid</th>
                    <th>Address</th>
                    <th>Date</th>
                </tr>
                <?php
                if (mysqli_num_rows($result) > 0) {
                    while($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>#" . $row['id'] . "</td>";
                        echo "<td>" . htmlspecialchars($row['food_name']) . "</td>";
                        echo "<td>" . $row['food_quantity'] . "</td>";
                        echo "<td>$" . $row['total_amount'] . "</td>";
                        echo "<td>" . ucfirst($row['payment_type']) . "</td>";
                        echo "<td>$" . $row['amount_paid'] . "</td>";
                        echo "<td>" . htmlspecialchars($row['adress']) . "</td>";
                        echo "<td>" . $row['date'] . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='8' style='text-align: center;'>No orders found</td></tr>";
                }
                ?>
            </table>
            <center>
                <a href="VarifiedUserIndex.php" class="back-button">Back to Menu</a>
            </center>
        </div>
    </body>
</html>
<?php
mysqli_close($conn);
?>