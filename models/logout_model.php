<?php
session_start();
if (isset($_POST['logout'])) {
    $_SESSION['loggedin'] = 'NO';
    session_destroy();
}