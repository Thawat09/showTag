<?php
include 'class/class.php';

$obj = new main_class($hostname, $username, $password, $database);

$sql = "SELECT nt.name, CASE WHEN rd.tag IS NOT NULL THEN '✓' ELSE '✗' END AS matching, rd.date 
FROM room_tag AS rt 
LEFT JOIN read_tag AS rd ON rt.tag = rd.tag 
LEFT JOIN name_tag AS nt ON rt.tag = nt.tag 
WHERE rt.room = 2";
$result = $obj->getQuery($sql, 1);