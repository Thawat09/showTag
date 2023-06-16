<?php
include '../class/class.php';
$room = $_GET['room'];
$obj = new main_class($hostname, $username, $password, $database);

$sql = "SELECT nt.name, CASE WHEN rd.tag IS NOT NULL THEN '✓' ELSE '✗' END AS matching, rd.date 
FROM room_tag AS rt 
LEFT JOIN read_tag AS rd ON rt.tag = rd.tag 
LEFT JOIN name_tag AS nt ON rt.tag = nt.tag 
WHERE rt.room = " . $room;
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

// function countEquipment($data, $matching) {
//     $count = 0;
//     foreach ($data as $row) {
//         if ($row['matching'] == $matching) {
//             $count++;
//         }
//     }
//     return $count;
// }

// $allEquipmentCount = countEquipment($result, '✓');
// $detectCount = countEquipment($result, '✗');
// $response = array(
//     'allEquipmentCount' => $allEquipmentCount,
//     'detectCount' => $detectCount
// );

// header('Content-Type: application/json');
// echo json_encode($response);