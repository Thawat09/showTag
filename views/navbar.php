<div class="navbar navbar-dark bg-purple">
    <a class="active" href="index.php">
        <img src="./public/logo.jpg" alt="Logo" class="navbar-logo">
    </a>
    <div class="navbar-center">
        <span class="navbar-text" style="color: white;">Equipment Inspection System</span>
    </div>
    <?php
        $currentPage = basename($_SERVER['PHP_SELF']);
        if ($currentPage === 'room.php') {
            echo '
                <a class="active" href="index.php">
                    <img src="./public/home4.png" onclick="indexFunction()" alt="Logo" class="navbar-logo1">
                </a>
            ';
        }
    ?>
</div>