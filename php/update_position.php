<?php
// Read the contents of the JSON file
$jsonData = file_get_contents('../players.json');

// Convert JSON data to PHP array
$playerData = json_decode($jsonData, true);

// Check if the updated position data is received from the client
if (isset($_POST['id']) && isset($_POST['position'])) {
    $playerId = $_POST['id'];
    $newPosition = $_POST['position'];

    // Iterate over the player data to find the matching player
    foreach ($playerData as &$player) {
        if ($player['id'] == $playerId) {
            // Update the player's position
            $player['position'] = $newPosition;
            break; // Exit the loop after finding the player
        }
    }

    // Save the updated player data to the JSON file
    file_put_contents('../players.json', json_encode($playerData));

    // Return the updated player data as a response
    header('Content-Type: application/json');
    echo json_encode($playerData);
} else {
    // Return an error response in JSON format
    echo json_encode(array('error' => 'Invalid request data'));
}
?>
