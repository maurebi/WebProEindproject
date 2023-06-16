<?php
// Start the session
session_start();
include __DIR__ . '/tpl/head.php';
include __DIR__ . '/tpl/body-start.php';
?>

<?php include '/php/join_session.php'; ?>

<div class="mainrow title">
    <h1>GANZENBORD</h1>
    <form id="playerForm" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="player_name">Player Name:</label>
        <input type="text" id="player_name" name="player_name">
        <button id="nameButton" type="submit">MEEDOEN</button>
    </form>
</div>

<div class="row">
    <div class="column col-8">
        <div class="boardbox">
            <h1>Gefeliciteerd! </h1>
            <h1>
            <div id="winner"> </div>
            </h1>
            <br />
            <h2> We hopen dat je het leuk vond!</h2>
            <h2> Klik op de knop hiernaast om opnieuw te spelen.</h2>
            <br />
            <h3> Gemaakt door Martijn, Nikki & Marieke</h3>
        </div>
    </div>
    <div class="column col-4">
        <div class="column side">
        </div>
        <div class="column side">
            <div id="outputDice"></div>
        </div>
        <div class="column side">
            <div class="Turninfo">
                <h2>
                    <div id="diced"> </div>
                </h2>
                <h3>
                    <div id="special"> </div>
                </h3>
                <form method="post" action="php/reset_session.php">
                    <button type="submit">HERSTART BORD</button>
                </form>

            </div>
        </div>
    </div>
</div>
<div class="row legenda">
    <div class="column col-6 row1legenda">
        <div class="box gans"><img src="img/graspatch.png" alt="pixel art of grasspatch"></div>
        <div class="meaning">Loop hetzelfde aantal nog eens.</div>
        <div class="box brug"><img src="img/bridge.png" alt="pixel art of bridge"></div>
        <div class="meaning">De brug brengt je naar 12.</div>
        <div class="box dedood"><img src="img/thumbstone.png" alt="pixel art of thumbstone"></div>
        <div class="meaning">Helaas, je bent dood. Begin helemaal opnieuw.</div>
    </div>
    <div class="column col-6 row2legenda">
        <div class="box herberg"><img src="img/herberg.png" alt="pixel art of herberg"></div>
        <div class="meaning">Je overnacht een nachtje in de herberg. Sla een beurt over.</div>
        <div class="box doornstruik"><img src="img/thornbush.png" alt="pixel art of thornbush"></div>
        <div class="meaning">De doornstruik prikkelt je terug naar 37.</div>
        <div class="box opnieuwgooien"><img src="img/flower.png" alt="pixel art of flower"></div>
        <div class="meaning">Gooi nog eens.</div>
    </div>
</div>
<form method="post" action="php/reset_session.php">
  <button type="submit">Reset Session</button>
</form>

    <?php
    include __DIR__ . '/tpl/body-end.php';
    /* Footer */
    include __DIR__ . '/tpl/footer.php';
    ?>
