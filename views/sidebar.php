<?php
include './models/sidebar_model.php';
?>

<div class="sidebar">
    <div class="sidebar-menu">
        <?php
        foreach ($result as $row) {
            $room = $row['room'];
            $link = "room.php?room=" . urlencode($room);
            echo '<a href="' . $link . '" class="sidebar-link" onclick="updateTable(\'' . $room . '\'); return false;">Room ' . $room . '</a>';
        }
        ?>
    </div>
    <div>
        <a href="#" class="sidebar-link" id="logoutBtn">Logout</a>
    </div>
</div>
