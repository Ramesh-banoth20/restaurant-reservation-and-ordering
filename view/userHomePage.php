<?php
    //include_once('../controller/sessionCheck.php');
    include_once('header.php');
?>

<!DOCTYPE html>
<html>
<head>
    <title>User Home</title>
    <link rel="stylesheet" type="text/css" href="../css/HomePage.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <div class="home-container">
        <div class="welcome-section">
            <h1>Welcome to Tasty Trails</h1>
            <p>Order your favorite food with just a few clicks!</p>
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

            <div class="action-card" onclick="location.href='contactUs.php';">
                <i class="fas fa-envelope fa-3x" style="color: #fc8019;"></i>
                <h3>Contact Us</h3>
                <button class="action-button">Get in Touch</button>
            </div>
        </div>

        <div class="features-section">
            <div class="features-grid">
                <div class="feature-item">
                    <i class="fas fa-clock fa-2x" style="color: #fc8019;"></i>
                    <h3>Fast Delivery</h3>
                    <p>Get your food delivered in minutes with our efficient delivery system</p>
                </div>

                <div class="feature-item">
                    <i class="fas fa-utensils fa-2x" style="color: #fc8019;"></i>
                    <h3>Fresh Food</h3>
                    <p>Enjoy the finest quality food prepared with fresh ingredients</p>
                </div>

                <div class="feature-item">
                    <i class="fas fa-star fa-2x" style="color: #fc8019;"></i>
                    <h3>Best Service</h3>
                    <p>Experience top-notch customer service and support</p>
                </div>

                <div class="feature-item">
                    <i class="fas fa-percent fa-2x" style="color: #fc8019;"></i>
                    <h3>Great Offers</h3>
                    <p>Avail exciting discounts and offers on your favorite meals</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
