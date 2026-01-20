<!DOCTYPE html>
<html>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #fff;
        }
 
        .header-container {
            background-color: #fff;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
            padding: 10px 0;
            position: sticky;
            top: 0;
            z-index: 1000;
        }
 
        .nav-bar {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 20px;
        }
 
        .logo {
            font-size: 24px;
            font-weight: bold;
            color: #fc8019;
            text-decoration: none;
        }
 
        .nav-links {
            display: flex;
            gap: 20px;
            align-items: center;
        }
 
        .nav-links a {
            color: #3d4152;
            text-decoration: none;
            font-weight: 500;
            font-size: 16px;
            padding: 8px 12px;
            border-radius: 4px;
            transition: all 0.3s ease;
        }
 
        .nav-links a:hover {
            color: #fc8019;
            background-color: #f8f8f8;
        }
 
        .main-nav {
            background-color: #fff;
            border-top: 1px solid #e8e8e8;
            padding: 10px 0;
        }
 
        .main-nav-container {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
        }
 
        .main-nav a {
            color: #3d4152;
            text-decoration: none;
            font-size: 14px;
            font-weight: 500;
            padding: 8px 12px;
            border-radius: 4px;
            transition: all 0.3s ease;
        }
 
        .main-nav a:hover {
            color: #fc8019;
            background-color: #f8f8f8;
        }
    </style>
    <div class="header-container">
        <div class="nav-bar">
            <a href="VarifiedUserIndex.php" class="logo">TASTY TRAILS</a>
            <div class="nav-links">
                <a href="viewnotification.php">Notifications</a>
                <a href="../controller/LogoutCheck.php">Logout</a>
            </div>
        </div>
    </div>
    <div class="main-nav">
        <div class="main-nav-container">
            <a href="orderhistory.php">Past Orders</a>
            <a href="promotion.php">Promotion</a>
            <a href="aboutus.php">About Us</a>
            <a href="review.php">Review</a>
            <a href="faq.php">FAQ</a>
            <a href="contactUs.php">Contact Us</a>
            <a href="userProfile.php">Profile</a>
        </div>
    </div>
</html>