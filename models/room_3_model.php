<?php
include '../class/class.php';

$obj = new main_class($hostname, $username, $password, $database);

$sql = "SELECT nt.name, CASE WHEN rd.tag IS NOT NULL THEN '✓' ELSE '✗' END AS matching, rd.date 
FROM room_tag AS rt 
LEFT JOIN read_tag AS rd ON rt.tag = rd.tag 
LEFT JOIN name_tag AS nt ON rt.tag = nt.tag 
WHERE rt.room = 3";
$result = $obj->getQuery($sql, 1);

$table = '<table id="table-data" class="table table-bordered table-wide">
            <thead class="thead-dark">
                <tr>
                    <th class="text-center">Name</th>
                    <th class="text-center">Matching</th>
                    <th class="text-center">Date</th>
                </tr>
            </thead>
            <tbody>';
foreach ($result as $row) {
    $table .= '<tr>
                <td class="text-center">' . $row['name'] . '</td>
                <td class="text-center">' . $row['matching'] . '</td>
                <td class="text-center">' . $row['date'] . '</td>
            </tr>';
}
$table .= '</tbody>
        </table>';

echo $table;