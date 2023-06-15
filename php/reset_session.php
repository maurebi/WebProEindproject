<?php
session_start();

// Reset the session
session_destroy();
session_regenerate_id(true);

// Reset the players data
$playersData = '[{"id":1,"position":"0","name":"Player 1","score":0,"color":"White"},{"id":2,"position":"0","name":"Player 2","score":0,"color":"Black"}]';
$file = '../players.json';
file_put_contents($file, $playersData);

// Redirect to another page after resetting the session and players data
header("Location: ../index.php");
exit();
?>