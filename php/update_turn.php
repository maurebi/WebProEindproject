<?php
$turnData = $_POST;
file_put_contents('../turn.json', json_encode($turnData));

// Send the response as JSON
header('Content-Type: application/json');
echo json_encode($turnData);
?>
