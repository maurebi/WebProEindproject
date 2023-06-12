let playerId = 1;
let players = []

// Player object constructor
function Player(id, position, name, score) {
  this.id = id;
  this.position = position;
  this.name = name;
  this.score = score;
}

// Function to save and sync player data
function savePlayerData(player) {
  // Convert the player object to JSON
  let jsonData = JSON.stringify(player);

  // Make an Ajax request to save and sync player data
  $.ajax({
    url: 'php/save_players.php',
    method: 'POST',
    data: { playerData: jsonData },
    success: function(response) {
      // Handle the server's response, if needed
      console.log('Player data saved successfully');

      // If player data was updated, retrieve and update player positions
      if (response) {
        let updatedPlayerData = JSON.parse(response);
        parsePlayerData(updatedPlayerData);
      }
    },
    error: function(error) {
      console.log('Error saving player data:', error);
    }
  });
}

// Function to parse and update player data
function parsePlayerData(data) {
    if (typeof data === 'object') {
      // Check if the player already exists in the players array
      var existingPlayer = players.find(function(player) {
        return player.id === data.id;
      });
  
      if (existingPlayer) {
        // Update the existing player object with the received data
        existingPlayer.position = data.position;
        existingPlayer.name = data.name;
        existingPlayer.score = data.score;
      } else {
        // Create a new Player object based on the received data
        var player = new Player(data.id, data.position, data.name, data.score);
  
        // Push the player object to the players array
        players.push(player);
      }
  
      // Once the player positions are updated, render the player positions on the game board
      renderPlayerPositions();
    } else {
      console.log('Invalid player data format:', data);
    }
  }
  
  

// Function to render player positions
function renderPlayerPositions() {
  players.forEach(function(player) {
    // Update the CSS of the corresponding HTML element based on the player's position
    let boxId = player.position;
    let boxElement = document.getElementById(boxId);

    // Example: Add a CSS class to the box element to display the player
    boxElement.classList.add('player-icon');
  });
}

// Function to handle button click event
function incrementId() {
    // Create and initialize the player object
    let player = new Player(playerId, 0, 'Player Name', 0);
    
    // Increment the player ID
    playerId++;
    
    // Save and sync the player data
    savePlayerData(player);
    
    // Display the player object
    console.log('New player:', player);
  }
  

// Get the button element
const button = document.getElementById("incrementButton");

// Add a click event listener to the button
button.addEventListener("click", incrementId);
function dice() {
    let out = document.getElementById("outputDice");
    let diced = Math.floor(Math.random()*6)+1;
    let image = "img/dice" + diced + ".png";
    out.innerHTML = "<img src='"+image+"'/>";
    return diced;
}
