<?php
session_start();
include 'class/class.php';

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: login.php");
    exit;
}

if (isset($_POST['logout'])) {
    session_destroy();
    header("Location: login.php");
    exit;
}

$obj = new main_class($hostname, $username, $password, $database);

$sql = "SELECT code, date FROM test";
$result = $obj->getQuery($sql, 1);

if (!empty($result)) {
    foreach ($result as $row) {
        $code = $row["code"];
        $date = $row["date"];
        echo "Code: " . $code . " | Date: " . $date . "<br>";
    }
} else {
    echo "No data found";
}