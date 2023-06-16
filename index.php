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
        <button id="nameButton" type="submit">Join</button>
    </form>
</div>

<div class="row">
    <div class="column col-8">
        <div class="boardbox">
        <div class="row row1">
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
        </div>
        <div class="row row2">
            <div class="box"></div>
            <div class="box"></div>
            <div id="20" class="box board"><p class="number">20</p></div>
            <div id="21" class="box board"><p class="number">21</p></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
        </div>
        <div class="row row3">
            <div class="box"></div>
            <div id="19" class="box board herberg"><p class="number">19</p></div>
            <div class="box"></div>
            <div class="box"></div>
            <div id="22" class="box board"><p class="number">22</p></div>
            <div class="box"></div>
            <div class="box"></div>
            <div id="25" class="box board"><p class="number">25</p></div>
            <div id="26" class="box board opnieuwgooien"><p class="number">26</p></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div id="44" class="box board"><p class="number">44</p></div>
            <div id="45" class="box board gans"><p class="number">45</p></div>
            <div id="46" class="box board"><p class="number">46</p></div>
            <div class="box"></div>
            <div class="box"></div>
        </div>
        <div class="row row4">
            <div class="box"></div>
            <div id="18" class="box board gans"><p class="number">18</p></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div id="23" class="box board gans"><p class="number">23</p></div>
            <div id="24" class="box board"><p class="number">24</p></div>
            <div class="box"></div>
            <div class="box"></div>
            <div id="27" class="box board gans"><p class="number">27</p></div>
            <div class="box"></div>
            <div class="box"></div>
            <div id="43" class="box board"><p class="number">43</p></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div id="47" class="box board"><p class="number">47</p></div>
            <div class="box"></div>
        </div>
        <div class="row row5">
            <div class="box"></div>
            <div class="box"></div>
            <div id="17" class="box board"><p class="number">17</p></div>
            <div id="16" class="box board"><p class="number">16</p></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div id="28" class="box board"><p class="number">28</p></div>
            <div class="box"></div>
            <div id="42" class="box board doornstruik"><p class="number">42</p></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div id="48" class="box board"><p class="number">48</p></div>
            <div class="box"></div>
        </div>
        <div class="row row6">
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div id="15" class="box board"><p class="number">15</p></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div id="29" class="box board"><p class="number">29</p></div>
            <div class="box"></div>
            <div class="box"></div>
            <div id="41" class="box board gans"><p class="number">41</p></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div id="49" class="box board"><p class="number">49</p></div>
            <div class="box"></div>
            <div class="box"></div>
        </div>
        <div class="row row7">
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div id="14" class="box board gans"><p class="number">14</p></div>
            <div class="box"></div>
            <div class="box"></div>
            <div id="30" class="box board"><p class="number">30</p></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div id="40" class="box board"><p class="number">40</p></div>
            <div class="box"></div>
            <div class="box"></div>
            <div id="50" class="box board gans"><p class="number">50</p></div>
            <div class="box"></div>
            <div class="box"></div>
        </div>
        <div class="row row8">
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div id="13" class="box board"><p class="number">13</p></div>
            <div class="box"></div>
            <div id="31" class="box board herberg"><p class="number">31</p></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div id="39" class="box board"><p class="number">39</p></div>
            <div class="box"></div>
            <div class="box"></div>
            <div id="51" class="box board"><p class="number">51</p></div>
            <div class="box"></div>
            <div class="box"></div>
        </div>
        <div class="row row9">
            <div class="box"></div>
            <div class="box"></div>
            <div id="10" class="box board"><p class="number">10</p></div>
            <div id="11" class="box board"><p class="number">11</p></div>
            <div id="12" class="box board"><p class="number">12</p></div>
            <div class="box"></div>
            <div class="box"></div>
            <div id="32" class="box board gans"><p class="number">32</p></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div id="38" class="box board"><p class="number">38</p></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div id="52" class="box board herberg"><p class="number">52</p></div>
            <div class="box"></div>
        </div>
        <div class="row row10">
            <div class="box"></div>
            <div id="9" class="box board gans"><p class="number">9</p></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div id="33" class="box board"><p class="number">33</p></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div id="37" class="box board"><p class="number">37</p></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div id="53" class="box board opnieuwgooien"><p class="number">53</p></div>
            <div class="box"></div>
        </div>
        <div class="row row11">
            <div class="box"></div>
            <div id="8" class="box board"><p class="number">8</p></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div id="34" class="box board"><p class="number">34</p></div>
            <div id="35" class="box board"><p class="number">35</p></div>
            <div id="36" class="box board gans"><p class="number">36</p></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div id="54" class="box board gans"><p class="number">54</p></div>
            <div class="box"></div>
        </div>
        <div class="row row12">
            <div class="box"></div>
            <div class="box"></div>
            <div id="7" class="box board"><p class="number">7</p></div>
            <div id="6" class="box board brug"><p class="number">6</p></div>
            <div id="5" class="box board gans"><p class="number">5</p></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div id="63" class="box board"><p class="number">63</p></div>
            <div id="64" class="box board finish left"><p class="number">64</p></div>
            <div class="box board finish right"></div>
            <div class="box"></div>
            <div id="55" class="box board"><p class="number">55</p></div>
            <div class="box"></div>
        </div>
        <div class="row row13">
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div id="4" class="box board"><p class="number">4</p></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div id="62" class="box board"><p class="number">62</p></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div id="56" class="box board"><p class="number">56</p></div>
            <div class="box"></div>
        </div>
        <div class="row row14">
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div id="3" class="box board"><p class="number">3</p></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div id="61" class="box board"><p class="number">61</p></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div id="57" class="box board"><p class="number">57</p></div>
            <div class="box"></div>
            <div class="box"></div>
        </div>
        <div class="row row15">
            <div class="box"></div>
            <div class="box board start left"><p class="number">Start</p></div>
            <div id="0" class="box board start right"></div>
            <div id="1" class="box board"><p class="number">1</p></div>
            <div id="2" class="box board"><p class="number">2</p></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div id="60" class="box board"><p class="number">60</p></div>
            <div id="59" class="box board gans"><p class="number">59</p></div>
            <div id="58" class="box board dedood"><p class="number">58</p></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
        </div>
        <div class="row row16">
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
        </div>
        </div>
    </div>
    <div class="column col-4">
        <div class="column side">
            <div class="turn">
                <div class="beurtDiv" id="beurtDivWit">
                    <h2>Het is de beurt van:</h2>
                    <img class="beurtImg" src="img/goose1.png" alt="witte gans">
                </div>
                <div class="beurtDiv hidden" id="beurtDivZwart">
                    <h2>Het is de beurt van:</h2>
                    <img class="beurtImg" src="img/goose2.png" alt="zwarte gans">
                </div>
            </div>
        </div>
        <div class="column side">
            <button id="diceButton">DOBBELEN</button>
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
            </div>
        </div>
    </div>
</div>
<div class="row legenda">
    <div class="column col-6 row1legenda">
        <div class="box gans"></div>
        <div class="meaning">Loop hetzelfde aantal nog eens.</div>
        <div class="box brug"></div>
        <div class="meaning">De brug brengt je naar 12.</div>
        <div class="box dedood"></div>
        <div class="meaning">Helaas, je bent dood. Begin helemaal opnieuw.</div>
    </div>
    <div class="column col-6 row2legenda">
        <div class="box herberg"></div>
        <div class="meaning">Je overnacht een nachtje in de herberg. Sla een beurt over.</div>
        <div class="box doornstruik"></div>
        <div class="meaning">De doornstruik prikkelt je terug naar 37.</div>
        <div class="box opnieuwgooien"></div>
        <div class="meaning">Gooi nog eens.</div>
    </div>
</div>
  <button onclick="resetSession()">Reset Session</button>

    <?php
    include __DIR__ . '/tpl/body-end.php';
    /* Footer */
    include __DIR__ . '/tpl/footer.php';
    ?>
