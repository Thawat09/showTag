<?php
session_start();
include 'class/class.php';

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: login.php");
    exit;
}

$obj = new main_class($hostname, $username, $password, $database);

$sql = "SELECT code, date FROM test";
$result = $obj->getQuery($sql, 1);

if (!empty($result)) {
    $data = [];
    foreach ($result as $row) {
        $code = $row["code"];
        $date = $row["date"];
        $data[] = "Code: " . $code . " | Date: " . $date;
    }
    echo json_encode($data);
} else {
    echo json_encode(['message' => 'No data found']);
}