<?php
   include_once('../controller/sessionCheck.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin Dashboard</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" href="../css/admin_dashboard_swiggy.css">
</head>
<body>
    <?php
        // loginCheck.php sets $_SESSION['username'] (lowercase).
        // Some older pages used other keys; fall back safely to avoid warnings.
        $displayUserName = $_SESSION['username'] ?? $_SESSION['UserName'] ?? $_SESSION['userName'] ?? 'Admin';
    ?>

    <header class="topbar">
        <div class="topbar-inner">
            <a class="brand" href="AdminIndex.php">TASTY TRAILS</a>

            <div class="whoami">
                <div class="role">Admin</div>
                <div class="name"><?php echo htmlspecialchars($displayUserName); ?></div>
            </div>

            <nav class="top-actions">
                <a class="link" href="admin_orderhistory.php">Orders</a>
                <a class="link" href="admin_promotion.php">Promotions</a>
                <a class="link" href="viewnotification_Admin.php">Notifications</a>
                <a class="btn btn-ghost" href="adminProfile.php">Profile</a>
                <a class="btn" href="../controller/logout.php">Logout</a>
            </nav>
        </div>
    </header>

    <main class="container">
        <section class="hero">
            <div class="hero-content">
                <h1>Admin dashboard</h1>
                <p>Quick access to the main things you manage every day.</p>
                <div class="hero-cta">
                    <a class="btn" href="admin_orderhistory.php">View orders</a>
                    <a class="btn btn-ghost" href="admin_promotion.php">Promotions</a>
                </div>
            </div>
        </section>

        <section class="section">
            <div class="section-title">
                <h2>Manage</h2>
                <p>Simple shortcuts grouped by task</p>
            </div>

            <div class="grid">
                <a class="card" href="admin_orderhistory.php">
                    <div class="card-title">View orders</div>
                    <div class="card-subtitle">See order history for all users.</div>
                    <div class="card-meta"><span class="tag">Orders</span><span class="cta">Open</span></div>
                </a>

                <a class="card" href="admin_promotion.php">
                    <div class="card-title">Update promotions</div>
                    <div class="card-subtitle">Add / delete promotions and offers.</div>
                    <div class="card-meta"><span class="tag tag-orange">Offers</span><span class="cta">Open</span></div>
                </a>

                <a class="card" href="admin_faq.php">
                    <div class="card-title">Update FAQ</div>
                    <div class="card-subtitle">Edit frequently asked questions.</div>
                    <div class="card-meta"><span class="tag">Content</span><span class="cta">Open</span></div>
                </a>

                <a class="card" href="admin_aboutus.php">
                    <div class="card-title">Update About Us</div>
                    <div class="card-subtitle">Edit About Us content for users.</div>
                    <div class="card-meta"><span class="tag">Content</span><span class="cta">Open</span></div>
                </a>

                <a class="card" href="admin_update_delivery.php">
                    <div class="card-title">Update delivery tracking</div>
                    <div class="card-subtitle">Maintain delivery tracking details.</div>
                    <div class="card-meta"><span class="tag">Operations</span><span class="cta">Open</span></div>
                </a>

                <a class="card" href="add_user_admin.php">
                    <div class="card-title">Add user/admin</div>
                    <div class="card-subtitle">Create new users or admins.</div>
                    <div class="card-meta"><span class="tag">Users</span><span class="cta">Open</span></div>
                </a>

                <a class="card" href="booktable_Admin.php">
                    <div class="card-title">Table reservations</div>
                    <div class="card-subtitle">View reservations and bookings.</div>
                    <div class="card-meta"><span class="tag">Bookings</span><span class="cta">Open</span></div>
                </a>
            </div>
        </section>
    </main>

    <footer class="footer">
        <div class="footer-inner">
            <div class="footer-left">
                <div class="footer-brand">TASTY TRAILS</div>
                <div class="footer-note">Swiggy-style admin dashboard for this project.</div>
            </div>
            <div class="footer-links">
                <a href="adminHomePage.php">Admin Home</a>
                <a href="AdminIndex.php">Admin Index</a>
                <a href="../controller/logout.php">Logout</a>
            </div>
        </div>
    </footer>
</body>
</html>

