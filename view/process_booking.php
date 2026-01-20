<?php
include_once('../controller/SessionCheck.php');

// Database connection
$conn = mysqli_connect('localhost', 'root', 'ramesh@2005', 'test');

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $food_name = mysqli_real_escape_string($conn, $_POST['food_name']);
    $food_price = mysqli_real_escape_string($conn, $_POST['food_price']);
    $quantity = (int)$_POST['quantity'];
    $dining_time = mysqli_real_escape_string($conn, $_POST['dining_time']);
    $dining_date = mysqli_real_escape_string($conn, $_POST['dining_date']);
    $table_number = (int)$_POST['table_number'];
    $special_instructions = mysqli_real_escape_string($conn, $_POST['special_instructions']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $payment_method = mysqli_real_escape_string($conn, $_POST['payment_method']);
    $user_id = isset($_SESSION['userid']) ? $_SESSION['userid'] : 0;
    $username = isset($_SESSION['username']) ? $_SESSION['username'] : 'Guest';
    $order_date = date('Y-m-d H:i:s');
    
    // Calculate total price
    $price_numeric = str_replace('$', '', $food_price);
    $total_price = $quantity * (float)$price_numeric;

    // Check if table is available for the selected date and time
    $check_table_query = "SELECT * FROM bookings 
                         WHERE table_number = $table_number 
                         AND dining_date = '$dining_date' 
                         AND dining_time = '$dining_time'";
    
    $result = mysqli_query($conn, $check_table_query);
    
    if (mysqli_num_rows($result) > 0) {
        // Table is already booked
        $_SESSION['error_message'] = "Sorry, this table is already booked for the selected time. Please choose another table or time.";
        header("Location: food_booking.php?item=$food_name&image={$_POST['image']}&price=$food_price");
        exit();
    }

    // Insert booking into database
    $insert_query = "INSERT INTO bookings (user_id, food_name, quantity, price_per_item, total_price, 
                    dining_date, dining_time, table_number, special_instructions, phone, 
                    payment_method, order_date, status) 
                    VALUES ('$user_id', '$food_name', '$quantity', '$price_numeric', '$total_price', 
                    '$dining_date', '$dining_time', '$table_number', '$special_instructions', '$phone', 
                    '$payment_method', '$order_date', 'pending')";

    if (mysqli_query($conn, $insert_query)) {
        // Also insert into orderhistory table
        $insert_history_query = "INSERT INTO orderhistory (id, username, food_name, food_quantity, total_amount, 
                               payment_type, amount_paid, adress, date, tracking_key, estimated_delivery_at, delivery_status) 
                               VALUES (NULL, '$username', '$food_name', '$quantity', '$total_price', 
                               '$payment_method', '$total_price', '$special_instructions', '$order_date', '', '', '')";
        
        if (mysqli_query($conn, $insert_history_query)) {
            // Both inserts successful
            $_SESSION['success_message'] = "Your order has been placed successfully! Your table is reserved.";
            header("Location: order_confirmation.php?order_id=" . mysqli_insert_id($conn));
            exit();
        } else {
            // Error in orderhistory insert
            $_SESSION['error_message'] = "Error recording order history: " . mysqli_error($conn);
            header("Location: food_booking.php?item=$food_name&image={$_POST['image']}&price=$food_price");
            exit();
        }
    } else {
        // Error in booking
        $_SESSION['error_message'] = "Error placing order: " . mysqli_error($conn);
        header("Location: food_booking.php?item=$food_name&image={$_POST['image']}&price=$food_price");
        exit();
    }
} else {
    // If someone tries to access this page directly
    header("Location: VarifiedUserIndex.php");
    exit();
}

mysqli_close($conn);
?> 