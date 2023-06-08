<?php
session_start();

$response = array();

if (isset($_POST['username']) && isset($_POST['password'])) {
  if ($_POST['username'] === 'admin' && $_POST['password'] === 'admin') {
    $_SESSION['loggedin'] = true;
    $response['success'] = true;
  } else {
    $response['success'] = false;
  }
  
  echo json_encode($response);
}