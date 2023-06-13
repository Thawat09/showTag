<?php
function countEquipment($result, $status)
{
    $count = 0;
    foreach ($result as $row) {
        if ($row['matching'] == $status) {
            $count++;
        }
    }
    return $count;
}
?>