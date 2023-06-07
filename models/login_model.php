<?php
session_start();

if (isset($_POST['username']) && isset($_POST['password'])) {
    if ($_POST['username'] === 'admin' && $_POST['password'] === 'admin') {
        $_SESSION['loggedin'] = true;
        header("Location: index.php");
        exit;
    } else {
        $error_message = "Invalid username or password";
    }
}