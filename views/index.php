<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html>

<head>
    <title>Home</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="icon" href="./public/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./css/styles.css">
</head>

<body>
    <div class="container">
        <h1>Welcome, admin!</h1>
        <form action="" method="post">
            <button type="submit" name="logout" class="btn btn-primary">Logout</button>
        </form>
    </div>
    <div class="rich-menu">
        <div class="menu-item">
            <img src="./public/home.png" alt="Icon 3">
        </div>
        <div class="menu-item">
            <img src="./public/home1.png" alt="Icon 1">
        </div>
        <div class="menu-item">
            <img src="./public/home2.png" alt="Icon 2">
        </div>
        <div class="menu-item">
            <img src="./public/home3.png" alt="Icon 3">
        </div>
        <div class="menu-item">
            <img src="./public/house.png" alt="Icon 3">
        </div>
    </div>

    <!-- <script src="./javascript/script.js"></script> -->
</body>

</html>