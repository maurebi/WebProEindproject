<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Get the current player index from the POST data
  $currentPlayerIndex = $_POST['index'];

  // Save the current player index to the session data
  $_SESSION['current_player_index'] = $currentPlayerIndex;

  // Return a success response
  echo json_encode(['status' => 'success']);
} else {
  // Return an error response for unsupported request method
  echo json_encode(['status' => 'error', 'message' => 'Unsupported request method']);
}
?>
