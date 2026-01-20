<?php
include_once('../controller/SessionCheck.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title>Tasty Trails - Home</title>
    <link rel="stylesheet" type="text/css" href="../css/HomePage.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <?php include_once('header.php'); ?>

    <div class="home-container">
        <div class="welcome-section">
            <h1>Welcome to Tasty Trails</h1>
            <p>Order your favorite food with just a few clicks!</p>
        </div>

        <div class="promo-section">
            <img src="../Image/discount.jpg" alt="Discount Coupon" class="promo-image">
        </div>

        <div class="food-section">
            <h2>Our Specialties</h2>
            <div class="food-grid">
                <div class="food-card">
                    <a href="food_booking.php?item=Classic Burger&image=burger.jpg&price=$8">
                        <img src="../Image/burger.jpg" alt="Burger" class="food-image">
                        <div class="food-details">
                            <h3>Classic Burger</h3>
                            <p>Delicious beef burger with lettuce, cheese, and special sauce.</p>
                            <span class="price">$8</span>
                        </div>
                    </a>
                </div>

                <div class="food-card">
                    <a href="food_booking.php?item=Supreme Pizza&image=pizza.jpg&price=$12">
                        <img src="../Image/pizza.jpg" alt="Pizza" class="food-image">
                        <div class="food-details">
                            <h3>Supreme Pizza</h3>
                            <p>Fresh baked pizza with premium toppings and melted cheese.</p>
                            <span class="price">$12</span>
                        </div>
                    </a>
                </div>

                <div class="food-card">
                    <a href="food_booking.php?item=Fresh Sushi&image=sushi.jpg&price=$15">
                        <img src="../Image/sushi.jpg" alt="Sushi" class="food-image">
                        <div class="food-details">
                            <h3>Fresh Sushi</h3>
                            <p>Premium grade sushi with fresh fish and authentic ingredients.</p>
                            <span class="price">$15</span>
                        </div>
                    </a>
                </div>

                <div class="food-card">
                    <a href="food_booking.php?item=Italian Pasta&image=spaghetti.jpg&price=$10">
                        <img src="../Image/spaghetti.jpg" alt="Pasta" class="food-image">
                        <div class="food-details">
                            <h3>Italian Pasta</h3>
                            <p>Al dente spaghetti with rich tomato sauce and fresh herbs.</p>
                            <span class="price">$10</span>
                        </div>
                    </a>
                </div>

                <div class="food-card">
                    <a href="food_booking.php?item=Greek Salad&image=greeksalad.jpg&price=$7">
                        <img src="../Image/greeksalad.jpg" alt="Greek Salad" class="food-image">
                        <div class="food-details">
                            <h3>Greek Salad</h3>
                            <p>Fresh Mediterranean salad with feta cheese and olives.</p>
                            <span class="price">$7</span>
                        </div>
                    </a>
                </div>

                <div class="food-card">
                    <a href="food_booking.php?item=Grilled Chicken&image=chicken.jpg&price=$11">
                        <img src="../Image/chicken.jpg" alt="Grilled Chicken" class="food-image">
                        <div class="food-details">
                            <h3>Grilled Chicken</h3>
                            <p>Perfectly seasoned and grilled chicken with sides.</p>
                            <span class="price">$11</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <div class="quick-actions">
            <div class="action-card" onclick="location.href='track_delivery.php';">
                <i class="fas fa-truck fa-3x" style="color: #fc8019;"></i>
                <h3>Track Your Order</h3>
                <button class="action-button">Track Now</button>
            </div>

            <div class="action-card" onclick="location.href='storeLocator.php';">
                <i class="fas fa-map-marker-alt fa-3x" style="color: #fc8019;"></i>
                <h3>Find Our Stores</h3>
                <button class="action-button">Locate Store</button>
            </div>

            <div class="action-card" onclick="location.href='userProfile.php';">
                <i class="fas fa-user fa-3x" style="color: #fc8019;"></i>
                <h3>Your Profile</h3>
                <button class="action-button">View Profile</button>
            </div>
        </div>

        <div class="footer-links">
            <a href="feedback.html">Feedback</a>
            <a href="viewprivacypolicy.html">Privacy Policy</a>
        </div>
    </div>
</body>
</html>