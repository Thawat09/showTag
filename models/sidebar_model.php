<?php
include './class/class.php';

$obj = new main_class($hostname, $username, $password, $database);

$sql = "SELECT room FROM room_tag GROUP BY room";
$result = $obj->getQuery($sql, 1);