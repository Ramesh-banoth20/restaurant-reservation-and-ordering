<?php

    require_once('DB.php');

    function searchStore($location)
    {
        $con = getConnection();

        $location = mysqli_real_escape_string($con, $location);

        $sql = "SELECT * FROM storeLocation WHERE area = '$location'";

        $result = mysqli_query($con, $sql);

        if (!$result)
        {
            die("Query failed: " . mysqli_error($con));
        }

        while ($row = mysqli_fetch_assoc($result))
        {
            echo "Location: " . $row['area'] . "<br>";
            echo "Road No.: " . $row['road_no'] . "<br>";
            echo "House No.: " . $row['house_no'] . "<br>";
            echo "Contact No.: " . $row['contact_no'] . "<br>";
        }
    }

    function updateStoreLocation($selectedLocation, $road_no, $house_no, $contact_no)
    {
        $con = getConnection();

        $query = "SELECT * FROM storeLocation WHERE area = '$selectedLocation'";
        $result = mysqli_query($con, $query);

        if (!$result || mysqli_num_rows($result) == 0) {
            return false;
        }

        $sql = "UPDATE storeLocation SET road_no = '$road_no', 
                        house_no = '$house_no', contact_no = '$contact_no' WHERE area = '$selectedLocation'";
        
        $updateResult = mysqli_query($con, $sql);

        if (!$updateResult)
        {
            return false;
        }

        return true;
    }

    function trackDelivery($tracking_key)
    {
        $con = getConnection();
        $sql = "SELECT estimated_ready_time, preparation_status FROM orderhistory WHERE tracking_key = '$tracking_key'";
        $result = mysqli_query($con, $sql);
        $order = mysqli_fetch_assoc($result);

        if (count($order) > 0)
        {
            $estimated_ready_time = $order['estimated_ready_time'];
            $preparation_status = $order['preparation_status'];

            echo "<div class='status-container'>";
            echo "<h3>Order Status</h3>";
            
            switch($preparation_status) {
                case 'pending':
                    echo "<p class='status pending'>Your order is being prepared</p>";
                    echo "<p>Estimated ready time: $estimated_ready_time</p>";
                    break;
                case 'preparing':
                    echo "<p class='status preparing'>Your food is being prepared</p>";
                    echo "<p>Estimated ready time: $estimated_ready_time</p>";
                    break;
                case 'ready':
                    echo "<p class='status ready'>Your food is ready! Please collect it from the counter.</p>";
                    break;
                default:
                    echo "<p class='status'>Order received and will be prepared shortly</p>";
            }
            echo "</div>";
        }
        else
        {
            echo "<p class='error'>Order not found. Please check your tracking key.</p>";
        }
    }

    function updateDelivery($trackingKey, $estimatedReadyTime, $preparationStatus)
    {
        $con = getConnection();

        $query = "SELECT * FROM orderhistory WHERE tracking_key = '$trackingKey'";
        $result = mysqli_query($con, $query);

        if (!$result || mysqli_num_rows($result) == 0) {
            return false;
        }

        $sql = "UPDATE orderhistory SET estimated_ready_time = '$estimatedReadyTime', 
                        preparation_status = '$preparationStatus' WHERE tracking_key = '$trackingKey'";
        
        $updateResult = mysqli_query($con, $sql);

        if (!$updateResult) {
            return false;
        }

        return true;
    }

    function getAllOrders() {
        $con = getConnection();
    
        $sql = "SELECT * FROM orderhistory";
        $result = mysqli_query($con, $sql);
    
        $orders = mysqli_fetch_all($result, MYSQLI_ASSOC);
        mysqli_free_result($result);
        mysqli_close($con);
    
        return $orders;
    }

    function searchStore1($location)
    {
        $con = getConnection();

        $location = mysqli_real_escape_string($con, $location);

        $sql = "SELECT * FROM storeLocation WHERE area = '$location'";

        $result = mysqli_query($con, $sql);

        if (!$result)
        {
            die("Query failed: " . mysqli_error($con));
        }

        while ($row = mysqli_fetch_assoc($result))
        {
            echo "Location: " . $row['area'] . "<br>";
            echo "Contact No.: " . $row['contact_no'] . "<br>";
            echo "Email : " . $row['email'] . "<br>";
        }
    }
?>