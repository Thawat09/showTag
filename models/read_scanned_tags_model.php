<?php
include 'class/class.php';

$obj = new main_class($hostname, $username, $password, $database);

$sql = "SELECT tag, date FROM read_tag";
$result = $obj->getQuery($sql, 1);

if (!empty($result)) {
    echo '<div style="display: flex; justify-content: center;">';
    echo '<table style="border-collapse: collapse; width: 50%; text-align: center; border: 1px solid black;">';
    echo '<tr><th style="border: 1px solid black; padding: 5px;">Tag</th><th style="border: 1px solid black; padding: 5px;">Date</th></tr>';
    foreach ($result as $row) {
        $tag = $row["tag"];
        $date = $row["date"];
        echo '<tr><td style="border: 1px solid black; padding: 5px;">' . $tag . '</td><td style="border: 1px solid black; padding: 5px;">' . $date . '</td></tr>';
    }
    echo '</table>';
    echo '</div>';
} else {
    echo 'No data found';
}