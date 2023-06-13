<!DOCTYPE html>
<html>

<head>
    <title>Room1</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="icon" href="./public/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./css/styles.css">
</head>

<body>
    <div class="container">
        <div class="table-container">
            <table class="table table-bordered">
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
            <span id="time"></span>
            <br>
            <span id="date"></span>
        </div>
    </div>

    <script src="./javascript/logout.js"></script>
    <script src="./javascript/time.js"></script>
</body>

</html>