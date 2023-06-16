<?php
session_start();

// Clear all session variables
$_SESSION = array();

// Destroy the session
session_destroy();

// Reset players.json to the initial data
$initialPlayerData = '[{"id":1,"position":"0","name":"Player 1","score":0,"color":"White","move":1},{"id":2,"position":"0","name":"Player 2","score":0,"color":"Black","move":0}]';
file_put_contents('../players.json', $initialPlayerData);

// Redirect to the desired page after resetting the session
header('Location: ../index.php');
exit();
?>
