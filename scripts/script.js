let playerId = 1;
let players = []
let currentPlayerIndex = 0;

// Player object constructor
function Player(id, position, name, score, color) {
  this.id = id;
  this.position = position;
  this.name = name;
  this.score = score;
  this.color = color;
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
        existingPlayer.color = data.color;
      } else {
        // Create a new Player object based on the received data
        var player = new Player(data.id, data.position, data.name, data.score, data.color);
  
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
  
  $('.box').children('img').remove();

  players.forEach(function(player) {
    let boxId = player.position;
    let boxElement = document.getElementById(boxId);

    let playerElement = document.createElement('img');
    playerElement.className = "player";
    if (player.color == "Wit"){
      playerElement.classList.add('marginWhite');
      playerElement.src = "img/goose1.png";
    }
    else if (player.color == "Zwart"){
      playerElement.classList.add('marginBlack');
      playerElement.src = "img/goose2.png";
    }

    playerElement.alt = player.id;

    if (!boxElement.classList.contains('start')) {
      playerElement.classList.add('marginTop');
    }

    playerElement.id = 'player-' + player.id;

    boxElement.appendChild(playerElement);

  });
}


// Function to handle button click event
function incrementId() {
    // Create and initialize the player object
    if (playerId >= 3) {
        alert("Too many players: For now this game can only be played with one or two players. We are sorry for the inconvenience.")
    }
    else {
        let player = new Player(playerId, 0, 'Player Name', 0);
            if (player.id == 1) {
                player.color = "Wit";
            }
            else if (player.id == 2) {
                player.color = "Zwart";
            }
        // Increment the player ID
        playerId++;

        // Save and sync the player data
        savePlayerData(player);

        // Display the player object
        console.log('New player:', player);

        let nexPlayeroutput = document.getElementById("beurt")
        nexPlayeroutput.innerHTML = "Wit is aan de beurt!";

    }
  }
  
// Function to handle button click event
function setupPlayers() {
  // Create and initialize the player object
  let player = new Player(playerId, 0, 'Player Name', 0);
    if (player.id == 1) {
      player.color = "Wit";
    }
    else if (player.id == 2) {
      player.color = "Zwart";
    }
  // Increment the player ID
  playerId++;
  // Save and sync the player data
  savePlayerData(player);
  // Display the player object
  console.log('New player:', player);
  let nexPlayeroutput = document.getElementById("beurt")
  nexPlayeroutput.innerHTML = "Het is de beurt van speler 1!";
}


// Get the button element
const startButton = document.getElementById("startButton");
startButton.addEventListener("click", function() {
startButton.classList.add('hidden');
setupPlayers();
setupPlayers();
});

const diceButton = document.getElementById("diceButton");
diceButton.addEventListener("click", rollDice);

function printDice() {
    let out = document.getElementById("outputDice");
    let diced = Math.floor(Math.random()*6)+1;
    let image = "img/dice" + diced + ".png";
    out.innerHTML = "<img src='"+image+"'/>";

    let dicedOutput = document.getElementById("diced")
    dicedOutput.innerHTML = "Er is "+diced+" gegooid."

    return diced;
}

function printTurn(){
    // Print that it is the next player's turn
    let currentPlayer = players[currentPlayerIndex];
    let nextPlayer = currentPlayer.color;
    console.log('Current player:', nextPlayer);
    let nextPlayeroutput = document.getElementById("beurt")
    nextPlayeroutput.innerHTML = nextPlayer+" is aan de beurt!";
}

function rollDice() {
  // Roll the dice
  let diceValue = printDice();

  // Display the dice value
  console.log('Dice value:', diceValue);

  // Update the current player's position based on the dice roll
  let currentPlayer = players[currentPlayerIndex];
  currentPlayer.position += diceValue;

    //   handle special boxes

    //  brug -> from box 6 to 12
    if (currentPlayer.position == 6){
        // print hier current player voor even
        currentPlayer.position += 6;
    }

    // doornstruik -> from box 42 to 37
    if (currentPlayer.position == 42){
        // print hier current player voor even
        currentPlayer.position += -5;
    }

    // gans -> forward the dice value again
    if (currentPlayer.position == 5 || currentPlayer.position == 9 || currentPlayer.position == 14 || currentPlayer.position == 18 ||
        currentPlayer.position == 23 || currentPlayer.position == 27 || currentPlayer.position == 32 || currentPlayer.position == 36 ||
        currentPlayer.position == 41 || currentPlayer.position == 45 || currentPlayer.position == 50 || currentPlayer.position == 54 ||
        currentPlayer.position == 59) {
        // print hier current player voor even
        currentPlayer.position += diceValue;
    }

    // dice again
    if (currentPlayer.position == 26 || currentPlayer.position == 53) {
        currentPlayerIndex = currentPlayerIndex
    }
    else {
        // Increment the current player index for the next turn
        currentPlayerIndex = (currentPlayerIndex + 1) % players.length;
    }
  // Save and sync the player data
  savePlayerData(currentPlayer);

    // Print current turn
    let CurrentTurn = printTurn();


}
