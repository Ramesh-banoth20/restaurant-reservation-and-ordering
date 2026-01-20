<?php
include_once('../controller/sessionCheck.php');
    //session_start();
    require_once('../model/userModel.php');
    //require_once('../controller/sessioncheck.php');

    // if (!isset($_SESSION['UserName'])) {
    //     header('Location: login.php');
    //     exit();
    // }


    // loginCheck.php sets $_SESSION['username'] (lowercase).
    // Fall back safely to avoid warnings on fresh sessions.
    $user_name = $_SESSION['username'] ?? $_SESSION['UserName'] ?? $_SESSION['userName'] ?? null;
    if ($user_name === null) {
        header('location: ../view/Login.html');
        exit();
    }


    $user = getAdmin($user_name);

    // if (!$user) {
    //     echo "User not found.UserName: $user_name";
    //     exit();
    // }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Profile</title>
    <link rel="stylesheet" type="text/css" href="../css/profile.css">
</head>
<body>
    <fieldset>
        <legend>Admin Profile</legend>
        <form action="#" method="post">
        Profile Information
        <br>
        <hr>

            Full Name: <br>
            <input type="text"  name="fullName" value="<?php echo $user['full_name']; ?>" readonly><br><br>

            Email: <br>
            <input type="text"  name="email" value="<?php echo $user['email']; ?>" readonly><br><br>

            UserName: <br>
            <input type="text" name="UserName" value="<?php echo $user['UserName']; ?>" readonly><br><br>

            Contact No: <br>
            <input type="text"  name="contactNo" value="<?php echo $user['contact_no']; ?>" readonly><br><br>

        <hr>

        <a href="AdminIndex.php">Back</a> |
        <a href="../controller/LogoutCheck.php">Logout</a>
    </fieldset>
</body>
</html>
