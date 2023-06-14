<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
if (isset($_POST['logout'])) {
    $_SESSION['loggedin'] = 'NO';
    session_destroy();
}