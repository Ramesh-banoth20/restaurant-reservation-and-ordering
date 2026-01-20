<?php
include_once('header.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title>Order Food - Tasty Trails</title>
    <link rel="stylesheet" type="text/css" href="../css/HomePage.css">
    <link rel="stylesheet" type="text/css" href="../css/food_booking.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <div class="booking-container">
        <div class="food-preview">
            <?php
            $food_name = isset($_GET['item']) ? $_GET['item'] : 'Food Item';
            $food_image = isset($_GET['image']) ? $_GET['image'] : 'burger.jpg';
            $food_price = isset($_GET['price']) ? $_GET['price'] : '$0';
            ?>
            <img src="../Image/<?php echo htmlspecialchars($food_image); ?>" alt="<?php echo htmlspecialchars($food_name); ?>" class="preview-image">
            <h2><?php echo htmlspecialchars($food_name); ?></h2>
            <p class="price"><?php echo htmlspecialchars($food_price); ?></p>
        </div>
        
        <div class="booking-form">
            <h3>Order Details</h3>
            <form action="process_booking.php" method="POST" id="orderForm">
                <input type="hidden" name="food_name" value="<?php echo htmlspecialchars($food_name); ?>">
                <input type="hidden" name="food_price" value="<?php echo htmlspecialchars($food_price); ?>">
                
                <div class="form-group">
                    <label for="quantity">Quantity:</label>
                    <input type="number" id="quantity" name="quantity" min="1" value="1" required>
                </div>

                <div class="form-group">
                    <label for="dining_time">Preferred Dining Time:</label>
                    <input type="time" id="dining_time" name="dining_time" required>
                </div>

                <div class="form-group">
                    <label for="dining_date">Dining Date:</label>
                    <input type="date" id="dining_date" name="dining_date" required min="<?php echo date('Y-m-d'); ?>">
                </div>

                <div class="form-group">
                    <label for="table_number">Table Number:</label>
                    <select id="table_number" name="table_number" required>
                        <option value="">Select a table</option>
                        <option value="1">Table 1 (2 seats)</option>
                        <option value="2">Table 2 (2 seats)</option>
                        <option value="3">Table 3 (4 seats)</option>
                        <option value="4">Table 4 (4 seats)</option>
                        <option value="5">Table 5 (6 seats)</option>
                        <option value="6">Table 6 (6 seats)</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="special_instructions">Special Instructions:</label>
                    <textarea id="special_instructions" name="special_instructions" rows="3" placeholder="Any special requests or dietary requirements?"></textarea>
                </div>

                <div class="form-group">
                    <label for="phone">Contact Number:</label>
                    <input type="tel" id="phone" name="phone" required placeholder="Enter your phone number">
                </div>

                <div class="form-group payment-options">
                    <label>Payment Method:</label>
                    <div class="radio-group">
                        <input type="radio" id="cash" name="payment_method" value="cash" checked>
                        <label for="cash">Cash</label>
                        
                        <input type="radio" id="card" name="payment_method" value="card">
                        <label for="card">Card</label>
                    </div>
                </div>

                <button type="submit" class="order-button">Place Order</button>
            </form>
            <div id="successMessage" style="display: none; text-align: center; margin-top: 20px; padding: 20px; background-color: #28a745; color: white; border-radius: 8px; font-size: 18px; box-shadow: 0 2px 5px rgba(0,0,0,0.2);">
                <i class="fas fa-check-circle" style="font-size: 24px; margin-right: 10px;"></i> 
                <span>Order placed successfully! Redirecting to confirmation page...</span>
            </div>
        </div>
    </div>
    <script>
        document.getElementById('orderForm').addEventListener('submit', function(e) {
            // Validate date
            const diningDate = new Date(document.getElementById('dining_date').value);
            const today = new Date();
            today.setHours(0, 0, 0, 0);
            
            if (diningDate < today) {
                alert('Please select a future date for your dining reservation.');
                e.preventDefault();
                return false;
            }

            // Show the success message
            document.getElementById('successMessage').style.display = 'block';
            
            // Submit the form after a short delay
            setTimeout(function() {
                document.getElementById('orderForm').submit();
            }, 2000);
        });
    </script>
</body>
</html> 