<?php

//require_once('mydb.php');
require_once('../model/promotionModel.php');
include_once('../controller/sessionCheck.php');

$promotions = getPromotion();
?>
<html>
    <head>
        <title>Promotions & Offers</title>
        <link rel="stylesheet" type="text/css" href="../css/promotion.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    </head>
    <body>
        <div class="promotion-container">
            <h1>Current Promotions & Offers</h1>
            
            <div class="promotions-grid">
                <?php 
                if(count($promotions) > 0) {
                    foreach($promotions as $promotion) {
                        if(!empty($promotion['promotion'])) {
                ?>
                <div class="promotion-card">
                    <div class="promotion-icon">
                        <i class="fas fa-tag"></i>
                    </div>
                    <div class="promotion-content">
                        <p><?= htmlspecialchars($promotion['promotion']) ?></p>
                    </div>
                </div>
                <?php 
                        }
                    }
                } else {
                ?>
                <div class="no-promotions">
                    <p>No current promotions available. Check back soon for exciting offers!</p>
                </div>
                <?php } ?>
            </div>

            <div class="navigation-links">
                <a href="VarifiedUserIndex.php" class="back-button">
                    <i class="fas fa-arrow-left"></i> Back to Menu
                </a>
            </div>
        </div>
    </body>
</html>