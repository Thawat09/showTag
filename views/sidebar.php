<div class="sidebar">
    <div class="sidebar-menu">
        <?php
        for ($i = 1; $i <= 3; $i++) {
            $room = "Room " . $i;
            $link = "room.php?room=" . $i;
            echo '<a href="' . $link . '" class="sidebar-link" onclick="updateTable(' . $i . '); return false;">' . $room . '</a>';
        }
        ?>
    </div>
    <div>
        <a href="#" class="sidebar-link" id="logoutBtn">Logout</a>
    </div>
</div>