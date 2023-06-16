let playerId = 1;
let players = [];
let currentPlayerIndex = 0;
let currentPlayerColor = "White";

// Player object constructor
function Player(id, position, name, score, color) {
    this.id = id;
    this.position = position;
    this.name = name;
    this.score = score;
    this.color = color;
}

function joinGame() {
    const playerName = document.getElementById("player_name").value;

    const xhr = new XMLHttpRequest();
    xhr.open('POST', 'php/join_session.php', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            // Handle the response if needed
        }
    };
    xhr.send('player_name=' + encodeURIComponent(playerName));
}


// Add an event listener to the form submit button
const nameButton = document.getElementById("nameButton");
nameButton.addEventListener("click", function(event) {
    event.preventDefault(); // Prevent the default form submission
    // Call the function to submit the form asynchronously
    joinGame();
    $(this).addClass("hidden");
    // Call the fetchSessionData function to fetch the session data
    fetchSessionData();
});


// Make an AJAX request to a PHP script that returns session data
function fetchSessionData() {
    $.ajax({
        url: 'php/get_session_data.php',
        method: 'GET',
        dataType: 'json',
        success: function(sessionData) {
            // Access the session data in JavaScript
            const username = sessionData.username;
            const color = sessionData.color;

            // Use the session data as needed
            console.log('Username:', username);
            console.log('Color:', color);

            // Further processing or actions with the session data
            // ...
        },
        error: function(error) {
            console.log('Error:', error);
        }
    });
}


function fetchPlayerData() {
    $.ajax({
        url: 'php/fetch_players.php',
        method: 'GET',
        dataType: 'json',
        success: function(data) {
            console.log('Received player data:', data);

            // Update the players array with the received data
            players = data;

            // Find the first player with color "Black" and set currentPlayerColor accordingly
            let blackPlayer = players.find(function(player) {
                return player.color === "Black";
            });

            // Find the first player with color "White" and set currentPlayerColor accordingly
            let whitePlayer = players.find(function(player) {
                return player.color === "White";
            });

            if (blackPlayer && whitePlayer) {
                // Both players have joined the game
                currentPlayerColor = "White"; // Default to white as the first player
                currentPlayerIndex = 0; // Start with the first player

                // Once the player positions are updated, render the player positions on the game board
                renderPlayerPositions();

                // Print current turn
                printTurn();
            } else {
                // Wait for both players to join
                console.log("Waiting for players to join...");
            }
        },
        error: function(error) {
            console.log('Error:', error);
        }
    });
}



// Function to parse and update player data
function parsePlayerData(data) {
    if (data !== null && Array.isArray(data)) {
        data.forEach(function(playerData) {
            // Check if the player already exists in the players array
            let existingPlayer = players.find(function(player) {
                return player.id === playerData.id;
            });

            if (existingPlayer) {
                // Update the existing player object with the received data
                existingPlayer.position = playerData.position;
                existingPlayer.name = playerData.name;
                existingPlayer.score = playerData.score;
                existingPlayer.color = playerData.color;
            } else {
                // Create a new Player object based on the received data
                let player = new Player(
                    playerData.id,
                    playerData.position,
                    playerData.name,
                    playerData.score,
                    playerData.color
                );

                // Push the player object to the players array
                players.push(player);
            }
        });

        // Once the player positions are updated, render the player positions on the game board
        renderPlayerPositions();
    } else {
        console.log('Invalid player data format:', data);
    }
}

// Function to render player positions
function renderPlayerPositions() {
    // $('.box').children('img').remove();
    console.log(players);

    players.forEach(function(player) {
        console.log(player);
        let boxId = player.position;
        let boxElement = document.getElementById(boxId);

        let playerElement = document.createElement('img');
        playerElement.className = "player";
        if (player.color == "White") {
            playerElement.classList.add('marginWhite');
            playerElement.src = "img/goose1.png";
        } else if (player.color == "Black") {
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

// Get the button element
const diceButton = document.getElementById("diceButton");
diceButton.addEventListener("click", rollDice);

function printDice() {
    let out = document.getElementById("outputDice");
    let diced = Math.floor(Math.random() * 6) + 1;
    let image = "img/dice" + diced + ".png";
    out.innerHTML = "<img src='" + image + "'/>";

    let dicedOutput = document.getElementById("diced");
    dicedOutput.innerHTML = "Er is " + diced + " gegooid.";

    return diced;
}

function printTurn() {
    let currentPlayer = players[currentPlayerIndex];
    currentPlayerColor = currentPlayer.color;

    let nextPlayerOutput = document.getElementById("beurt");
    let beurtDivWit = document.getElementById("beurtDivWit");
    let beurtDivZwart = document.getElementById("beurtDivZwart");

    if (currentPlayerColor === "White") {
        beurtDivWit.classList.remove("hidden");
        beurtDivZwart.classList.add("hidden");
    } else if (currentPlayerColor === "Black") {
        beurtDivWit.classList.add("hidden");
        beurtDivZwart.classList.remove("hidden");
    }

    diceButton.disabled = currentPlayerColor !== currentPlayer.color;
}

function specialEvents(currentPlayer, diceValue){
    if (currentPlayer.position == 5 || currentPlayer.position == 9 ||
        currentPlayer.position == 14 || currentPlayer.position == 18 ||
        currentPlayer.position == 23 || currentPlayer.position == 27 ||
        currentPlayer.position == 32 || currentPlayer.position == 36 ||
        currentPlayer.position == 41 || currentPlayer.position == 45 ||
        currentPlayer.position == 50 || currentPlayer.position == 54 ||
        currentPlayer.position == 59) {
        // Perform the special action
        currentPlayer.position += diceValue;
        let specialActionText = document.getElementById("special");
        specialActionText.innerHTML = currentPlayer.color + " mocht hetzelfde aantal nog eens lopen!";
    //     recursion, for if a player lands on a special box twice in a row
    //     hier moet delay komen
        specialEvents(currentPlayer, diceValue)
    } else if (currentPlayer.position == 42) {
        // Perform the special action
        currentPlayer.position -= 5;

        let specialActionText = document.getElementById("special");
        specialActionText.innerHTML = currentPlayer.color + " is teruggeprikkeld naar 37 door de doornstruik!";
    } else if (currentPlayer.position == 6) {
        // Perform the special action
        currentPlayer.position += 6;

        let specialActionText = document.getElementById("special");
        specialActionText.innerHTML = currentPlayer.color + " heeft de brug genomen naar 12!";
    } else if (currentPlayer.position == 58) {
        // Perform the special action
        currentPlayer.position -= 58;
        let specialActionText = document.getElementById("special");
        specialActionText.innerHTML = currentPlayer.color + " is dood! " + currentPlayer.color + " moet terug naar start.";
    } else if (currentPlayer.position == 26 || currentPlayer.position == 53) {
        let specialActionText = document.getElementById("special");
        specialActionText.innerHTML = currentPlayer.color + " mag nog een keer gooien!";
    } else {
        let specialActionText = document.getElementById("special");
        specialActionText.innerHTML = currentPlayer.color + " staat op een doodnormaal vakje!";
    }
}


// Function to delay execution
function delay(ms) {
    return new Promise(resolve => setTimeout(resolve, ms));
}

async function rollDice() {
    // Roll the dice
    let diceValue = printDice();

    // Update the current player's position based on the dice roll
    let currentPlayer = players[currentPlayerIndex];
    currentPlayer.position = parseInt(currentPlayer.position, 10);
    currentPlayer.position += diceValue;

    // Print current turn
    printTurn();

    // Move the player immediately
    renderPlayerPositions();

    // Handle special boxes after a delay
    await delay(300);
    specialEvents(currentPlayer, diceValue)

    // Check if the player has reached the winning position
    if (currentPlayer.position >= 64) {
        let specialActionText = document.getElementById("special");
        specialActionText.innerHTML = currentPlayer.color + " heeft gewonnen!";
        diceButton.disabled = true;
    }

    // Save and sync the player data
    $.ajax({
        url: 'php/update_position.php',
        method: 'POST',
        dataType: 'json',
        data: {
            id: currentPlayer.id,
            position: currentPlayer.position
        },
        success: function(data) {
            // Update the players array with the received data
            players = data;

            // Once the player positions are updated, render the player positions on the game board
            renderPlayerPositions();

            // Print current turn
            printTurn();

            if (currentPlayer.position == 26 || currentPlayer.position == 53) {
                currentPlayerIndex = currentPlayerIndex;
            } else{
                currentPlayerIndex = (currentPlayerIndex + 1) % players.length;
            }

            // Enable the dice button again after the AJAX request is completed
            if (currentPlayer.position < 64) {
                diceButton.disabled = false;
            }
        },
        error: function(error) {
            console.error('Error:', error);
            // Enable the dice button again in case of an error
            diceButton.disabled = false;
        }
    });
}

fetchPlayerData();
setInterval(fetchPlayerData, 5000);