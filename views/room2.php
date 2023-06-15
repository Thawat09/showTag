<!DOCTYPE html>
<html>

<head>
    <title>Room2</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="icon" href="./public/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./css/styles.css">
</head>

<body>
    <div class="container">
        <div class="table-container">
            <table id="table-data" class="table table-bordered table-wide">
                <thead class="thead-dark">
                    <tr>
                        <th class="text-center">Name</th>
                        <th class="text-center">Matching</th>
                        <th class="text-center">Date</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($result as $row) : ?>
                        <tr>
                            <td class="text-center"><?php echo $row['name']; ?></td>
                            <td class="text-center"><?php echo $row['matching']; ?></td>
                            <td class="text-center"><?php echo $row['date']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <div class="date-time-container">
            <h5 id="time"></h5>
            <h5 id="date"></h5>
            <br>
            <div id="equipment-count" class="additional-content">
                <div class="content-item mt-3">
                    <h5>All Equipment</h5>
                    <div class="gray-rectangle">
                        <p id="all-equipment-count"><?php echo countEquipment($result, '✓'); ?></p>
                    </div>
                </div>
                <div class="content-item mt-3">
                    <h5>Detect</h5>
                    <div class="gray-rectangle">
                        <p id="detect-count"><?php echo countEquipment($result, '✗'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- <script src="./javascript/logout.js"></script> -->
    <script src="./javascript/time.js"></script>
    <script src="./javascript/real_time.js"></script>
</body>

</html>