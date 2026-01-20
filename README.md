# Food Delivery Web Application

A full-stack web application for online food ordering and delivery management system built with PHP, MySQL, HTML, CSS, and JavaScript.

---

## 📋 Table of Contents

- [Project Overview](#project-overview)
- [Features](#features)
- [Technology Stack](#technology-stack)
- [Prerequisites](#prerequisites)
- [Installation & Setup](#installation--setup)
- [Project Structure](#project-structure)
- [Workflow & Architecture](#workflow--architecture)
- [Database Schema](#database-schema)
- [Running the Project](#running-the-project)
- [User Roles](#user-roles)
- [API & Features](#api--features)
- [Contributing](#contributing)

---

## 🎯 Project Overview

This is a comprehensive food delivery web application that enables users to:
- Browse and order food items online
- Make online payments
- Track their deliveries
- Manage reservations (book tables)
- Leave feedback and reviews
- View order history and notifications

The application includes an admin panel for managing:
- Users and their profiles
- Food promotions
- Store locations
- Delivery tracking
- Order history
- Customer feedback and notifications

---

## ✨ Features

### User Features
- **User Registration & Authentication**: Secure signup and login system
- **Browse Menu**: View available food items and promotions
- **Place Orders**: Add items to cart and checkout
- **Multiple Payments**: Online payment processing
- **Order Tracking**: Real-time delivery tracking
- **Order History**: View past orders and receipts
- **Table Reservations**: Book tables for dining
- **Feedback & Reviews**: Leave feedback and rate orders
- **Notifications**: Receive order updates and notifications
- **Store Locator**: Find nearby restaurant locations
- **User Profile**: Manage personal information

### Admin Features
- **User Management**: Add, edit, delete users and admins
- **Promotion Management**: Create and manage promotions/discounts
- **Store Location Management**: Update store locations and details
- **Order Management**: View and manage all orders
- **Delivery Tracking**: Monitor and update delivery status
- **Analytics**: View order history and statistics
- **Notification Management**: Send notifications to users
- **About Us & FAQ**: Manage website content

---

## 🛠 Technology Stack

### Backend
- **PHP 8.0.28** - Server-side scripting
- **MySQL/MariaDB 10.4.28** - Database management system
- **MySQLi** - Database connectivity

### Frontend
- **HTML5** - Page structure and markup
- **CSS3** - Styling and responsive design
- **JavaScript (ES5)** - Client-side interactivity
- **AJAX** - Asynchronous data fetching

### Architecture
- **MVC Pattern** - Model-View-Controller architecture
  - **Models**: Business logic and database operations (`/model` folder)
  - **Views**: User interface templates (`/view` folder)
  - **Controllers**: Request handlers and data processing (`/controller` folder)

---

## 📋 Prerequisites

Before running the project, ensure you have:

1. **PHP 8.0 or higher**
   - Download from: https://www.php.net/downloads
   - Built-in web server or Apache/Nginx

2. **MySQL/MariaDB Server**
   - Download from: https://www.mysql.com/ or https://mariadb.org/
   - Version 10.4 or higher
   - Default credentials: `username: root`, `password: (empty)`

3. **Web Browser**
   - Chrome, Firefox, Safari, or Edge

4. **Code Editor** (Optional)
   - VS Code, PHPStorm, or any text editor

---

## 📦 Installation & Setup

### Step 1: Extract Project Files
Extract the project to your desired location:
```
c:\Users\banot\OneDrive\Desktop\srptest\Web-Technologies-Project-
```

### Step 2: Start MySQL/MariaDB Server
Ensure your MySQL/MariaDB server is running on localhost:3306 with:
- Host: `localhost`
- Username: `root`
- Password: (empty)
- Database name: `test`

### Step 3: Import Database Schema
1. Open phpMyAdmin (usually at http://localhost/phpmyadmin)
2. Create a new database named `test`
3. Import the SQL file:
   - Go to the `test` database
   - Click "Import"
   - Select `test.sql` from the project root
   - Click "Go"

Alternatively, use MySQL command line:
```bash
mysql -u root < test.sql
```

### Step 4: Verify Database Connection
The database configuration is in `/controller/DB.php`:
```php
$dbhost = "localhost";
$dbname = "test";
$dbuser = "root";
$dbpass = "";
```

Modify if your credentials differ.

### Step 5: Start PHP Development Server
Navigate to the project directory and run:
```bash
cd "c:\Users\banot\OneDrive\Desktop\srptest\Web-Technologies-Project-"
php -S localhost:8000
```

### Step 6: Access the Application
Open your browser and go to:
```
http://localhost:8000/view/index.php
```

---

## 📁 Project Structure

```
Web-Technologies-Project-/
├── view/                          # User Interface Templates
│   ├── index.php                 # Redirects to Dashboard.html
│   ├── Dashboard.html            # Main landing page
│   ├── Login.html                # User login page
│   ├── Signup.html               # User registration page
│   ├── userHomePage.php          # User dashboard
│   ├── admin_dashboard.php       # Admin dashboard
│   ├── food_booking.php          # Order food page
│   ├── checkout.php              # Checkout page
│   ├── track_delivery.php        # Track order delivery
│   ├── orderhistory.php          # View past orders
│   ├── ReservationSystem.php     # Book tables
│   ├── review.php                # Leave reviews
│   ├── feedback.html             # Send feedback
│   ├── aboutus.php               # About us page
│   ├── faq.php                   # FAQ page
│   ├── storeLocator.php          # Find store locations
│   ├── promotion.php             # View promotions
│   ├── addAdmin.php              # Admin: Add admin
│   ├── addUser.php               # Admin: Add user
│   ├── admin_promotion.php       # Admin: Manage promotions
│   ├── admin_update_delivery.php # Admin: Update delivery status
│   ├── admin_update_store_location.php # Admin: Update locations
│   ├── admin_orderhistory.php    # Admin: View all orders
│   ├── viewfeedback.php          # Admin: View feedback
│   ├── viewnotification.php      # User: View notifications
│   ├── footer.php                # Footer component
│   └── header.php                # Header component
│
├── controller/                    # Request Handlers & Business Logic
│   ├── DB.php                    # Database connection
│   ├── loginCheck.php            # Handle login
│   ├── SignupCheck.php           # Handle signup
│   ├── LogoutCheck.php           # Handle logout
│   ├── paymentCheck.php          # Process payments
│   ├── track_deliveryCheck.php   # Update delivery tracking
│   ├── ReservationSystemCheck.php # Handle table reservations
│   ├── feedbackCheck.php         # Process feedback submission
│   ├── contactUsCheck.php        # Handle contact form
│   ├── NotificationCheck.php     # Manage notifications
│   ├── addUserCheck.php          # Admin: Add user
│   ├── addAdminCheck.php         # Admin: Add admin
│   ├── admin_update_deliveryCheck.php # Admin: Update delivery
│   ├── admin_update_store_locationCheck.php # Admin: Update locations
│   └── ... (other controllers)
│
├── model/                         # Database Models & Data Logic
│   ├── DB.php                    # Database connection function
│   ├── connect.php               # Connection and user data processing
│   ├── userModel.php             # User operations (login, signup)
│   ├── loginregModel.php         # Login/registration models
│   ├── orderModel.php            # Order operations
│   ├── feedbackModel.php         # Feedback operations
│   ├── reviewModel.php           # Review operations
│   ├── notificationModel.php     # Notification operations
│   ├── promotionModel.php        # Promotion operations
│   ├── Admin.php                 # Admin operations
│   ├── operationModel.php        # General operations
│   └── ... (other models)
│
├── css/                           # Stylesheets
│   ├── HomePage.css              # Homepage styles
│   ├── Login.css                 # Login page styles
│   ├── Signup.css                # Signup page styles
│   ├── food_booking.css          # Food booking styles
│   ├── checkout.css              # Checkout styles
│   ├── track_delivery.css        # Delivery tracking styles
│   ├── orderhistory.css          # Order history styles
│   ├── promotion.css             # Promotions styles
│   ├── admin_dashboard.css       # Admin dashboard styles
│   └── ... (other CSS files)
│
├── js/                            # JavaScript Files
│   ├── script.js                 # Main JavaScript
│   ├── search.js                 # Search functionality
│   ├── order.js                  # Order management
│   ├── loginCheck.js             # Login validation
│   ├── feedbackCheck.js          # Feedback validation
│   ├── contactUsCheck.js         # Contact form validation
│   └── ... (other JavaScript files)
│
├── Image/                         # Image Assets
│
├── assets/                        # Additional Assets
│   └── css/
│
├── sql/                           # Additional SQL Scripts
│   └── create_bookings_table.sql
│
├── test.sql                       # Main Database Schema & Data
├── README.md                      # This file
└── .git/                          # Git version control
```

---

## 🔄 Workflow & Architecture

### Application Flow

1. **User Entry Point**
   - User visits `http://localhost:8000/view/index.php`
   - Redirected to `Dashboard.html` (landing page)

2. **Authentication Flow**
   - User registers via `Signup.html` → `SignupCheck.php` → `userModel.php`
   - User logs in via `Login.html` → `loginCheck.php` → `userModel.php`
   - Session created in `SessionCheck.php`

3. **Order Processing Flow**
   - User browses food items → `food_booking.php`
   - User adds items to cart → `order.js`
   - User proceeds to checkout → `checkout.php`
   - Payment processing → `paymentCheck.php`
   - Order saved to database → `orderModel.php`

4. **Admin Operations**
   - Admin logs in → Redirected to `admin_dashboard.php`
   - Manage users, promotions, deliveries, orders
   - All changes validated and stored via controller files

### MVC Pattern Implementation

```
Request from Browser
        ↓
    View Layer (HTML/CSS/JS)
        ↓
    Controller Layer (Process Logic)
        ↓
    Model Layer (Database Operations)
        ↓
    Database (MySQL)
        ↓
    Response Back to View
```

---

## 💾 Database Schema

Key tables in the `test` database:

| Table Name | Purpose |
|-----------|---------|
| `registration` | User accounts (username, password, email, phone, etc.) |
| `admin` | Admin user accounts |
| `orders` | Food orders (order details, status, delivery address) |
| `feedback` | Customer feedback and reviews |
| `promotion` | Store promotions and discounts |
| `notification` | User notifications and alerts |
| `bookings` | Table reservations |
| `aboutus` | About Us page content |
| `faq` | Frequently Asked Questions |
| `storeLocation` | Store location information |

Run the following to see all tables:
```sql
USE test;
SHOW TABLES;
```

---

## 🚀 Running the Project

### Option 1: PHP Built-in Server (Recommended for Development)

1. Open terminal/PowerShell in the project directory
2. Run the command:
   ```bash
   php -S localhost:8000
   ```
3. Open browser: `http://localhost:8000/view/index.php`
4. Press `Ctrl+C` to stop the server

### Option 2: Apache/Nginx Server

1. Copy the project to your web root:
   - Apache: `C:\xampp\htdocs\` or `C:\wamp\www\`
   - Nginx: Configure document root in nginx.conf

2. Access via: `http://localhost/Web-Technologies-Project-/view/index.php`

### Option 3: Using XAMPP/WAMP

1. Install XAMPP/WAMP
2. Copy project to `htdocs` (XAMPP) or `www` (WAMP)
3. Start Apache and MySQL services
4. Access via: `http://localhost/projectname/view/index.php`

---

## 👥 User Roles

### 1. Customer/User
- Browse menu and food items
- Create account and login
- Place food orders
- Make online payments
- Track delivery in real-time
- View order history
- Book tables for dining
- Leave feedback and reviews
- Receive notifications
- Find store locations

### 2. Admin
- Manage customer accounts
- Add/remove other admins
- Create and manage promotions
- Update store locations and details
- View all orders and order history
- Update delivery status
- View and respond to customer feedback
- Send notifications to users
- Manage FAQ and About Us content
- Generate reports and analytics

---

## 🔧 API & Features

### Authentication APIs
- **User Login**: `/controller/loginCheck.php`
- **User Signup**: `/controller/SignupCheck.php`
- **User Logout**: `/controller/LogoutCheck.php`
- **Session Check**: `/controller/SessionCheck.php`

### Order APIs
- **Place Order**: `/controller/paymentCheck.php`
- **Track Delivery**: `/controller/track_deliveryCheck.php`
- **Order History**: `/view/orderhistory.php`
- **Order Confirmation**: `/view/order_confirmation.php`

### User APIs
- **Add User** (Admin): `/controller/addUserCheck.php`
- **Delete User** (Admin): `/controller/deleteUserCheck.php`
- **User Profile**: `/view/userProfile.php`

### Admin APIs
- **Add Admin**: `/controller/addAdminCheck.php`
- **Manage Promotions**: `/controller/admin_update_promotionCheck.php`
- **Update Delivery**: `/controller/admin_update_deliveryCheck.php`
- **Update Locations**: `/controller/admin_update_store_locationCheck.php`

### Other Features
- **Feedback**: `/controller/feedbackCheck.php`
- **Notifications**: `/controller/NotificationCheck.php`
- **Table Reservations**: `/controller/ReservationSystemCheck.php`
- **Contact Us**: `/controller/contactUsCheck.php`

---

## 🔐 Security Notes

⚠️ **Important**: This project uses basic security practices. For production:

1. **Hash Passwords**: Use `password_hash()` and `password_verify()`
2. **SQL Injection**: Use prepared statements with MySQLi
3. **Session Security**: Implement secure session handling
4. **Input Validation**: Sanitize all user inputs
5. **HTTPS**: Use SSL/TLS certificates
6. **Environment Variables**: Store credentials in `.env` file

Example improvement for credentials:
```php
// Current (NOT secure for production)
$dbpass = "";

// Better (use environment variables)
$dbpass = getenv('DB_PASSWORD');
```

---

## 📝 License

This project is part of a Web Technologies course project. 

---

## 👨‍💻 Support & Troubleshooting

### Issue: Database Connection Error
- **Solution**: Ensure MySQL is running and credentials in `/controller/DB.php` are correct

### Issue: Files Not Loading (CSS/JS)
- **Solution**: Check file paths in HTML and ensure they're relative to the project root

### Issue: Port 8000 Already in Use
- **Solution**: Use a different port: `php -S localhost:8001`

### Issue: Blank Page
- **Solution**: Check browser console for errors, enable error reporting in PHP

Enable PHP error reporting in your files:
```php
error_reporting(E_ALL);
ini_set('display_errors', 1);
```

---

## 📞 Contact & Questions

For questions or issues, refer to the FAQ section in the application or contact the development team.

---

**Last Updated**: January 20, 2026  
**Version**: 1.0.0  
**Status**: Development
