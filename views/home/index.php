<?php
session_start();
if (isset($_SESSION['username'])) header('Location: ../dashboard/index');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once 'views/assets/shared/headers.php'; ?>
    <script src="../views/assets/js/submitAuth.js" defer></script>
    <style>
        #notification-box {
            position: fixed;
            bottom: 15px;
            right: 15px;
            display: none;
            text-align: center;
        }
    </style>
    <title>Dikwis Monitoring</title>
</head>
<body>
    <form id="login-form" onsubmit="return false">
        <div id="form-header">
            <h1>Dikwis Monitoring</h1>
            <h3>User Login</h3>
        </div>
        <div id="form-body">
            <div id="form-group">
                <input type="text" id="username" name="username" placeholder="Username">
            </div>
            <div id="form-group">
                <input type="password" id="password" name="password" placeholder="Password">
            </div>
        </div>
        <div id="form-footer">
            <button type="submit" button contain=primary small id="login-button">Login</button>
        </div>
    </form>
    <div contain=danger id="notification-box">
        Invalid login!
    </div>
    <?php include_once 'views/assets/shared/footers.php'; ?>
</body>
</html>