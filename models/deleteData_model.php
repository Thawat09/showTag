<?php
include '../class/class.php';

$obj = new main_class($hostname, $username, $password, $database);

$sqlD = "DELETE FROM read_tag";
$result = $obj->getQuery($sqlD, 0);
