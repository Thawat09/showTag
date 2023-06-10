<?php
include 'class/class.php';

$obj = new main_class($hostname, $username, $password, $database);

$sql = "SELECT nt.name, CASE WHEN rd.tag IS NOT NULL THEN '✓' ELSE '✗' END AS matching, rd.date 
FROM room_tag AS rt 
LEFT JOIN read_tag AS rd ON rt.tag = rd.tag 
LEFT JOIN name_tag AS nt ON rt.tag = nt.tag 
WHERE rt.room = 2";
$result = $obj->getQuery($sql, 1);

if (!empty($result)) {
    echo '<div style="display: flex; justify-content: center;">';
    echo '<table style="border-collapse: collapse; width: 50%; text-align: center; border: 1px solid black;">';
    echo '<tr><th style="border: 1px solid black; padding: 5px;">Name</th><th style="border: 1px solid black; padding: 5px;">Matching</th><th style="border: 1px solid black; padding: 5px;">Date</th></tr>';
    
    $rowNumber = 1;
    foreach ($result as $row) {
        $name = $row["name"];
        $matching = $row["matching"];
        $date = $row["date"];
        
        echo '<tr><td style="border: 1px solid black; padding: 5px;">' . $name . '</td><td style="border: 1px solid black; padding: 5px;">' . $matching . '</td><td style="border: 1px solid black; padding: 5px;">' . $date . '</td></tr>';
        
        $rowNumber++;
    }
    
    echo '</table>';
    echo '</div>';
} else {
    echo 'No data found';
}