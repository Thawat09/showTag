<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== 'YES') {
    header("Location: login.php");
    exit;
}