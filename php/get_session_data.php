<?php
session_start();

// Create an array with the session data
$sessionData = array(
    'username' => $_SESSION['username'],
    'color' => $_SESSION['color']
);

// Set the response content type to JSON
header('Content-Type: application/json');

// Encode the session data as JSON and output it
echo json_encode($sessionData);
?>
