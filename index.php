<?php
include __DIR__ . '/tpl/head.php';
include __DIR__ . '/tpl/body-start.php';
?>
    <h1>Ganzebord</h1>
<h2>Het is de beurt van: Speler 1!</h2>

<div>
    <button onclick="dice()">Dobbelen!</button>
    <div id="outputDice"></div>
</div>

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
            <div class="box board"><p class="number">20</p></div>
            <div class="box board"><p class="number">21</p></div>
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
            <div class="box board"><p class="number">19</p></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box board"><p class="number">22</p></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box board"><p class="number">25</p></div>
            <div class="box board"><p class="number">26</p></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box board"><p class="number">44</p></div>
            <div class="box board"><p class="number">45</p></div>
            <div class="box board"><p class="number">46</p></div>
            <div class="box"></div>
            <div class="box"></div>
        </div>
        <div class="row row4">
            <div class="box"></div>
            <div class="box board"><p class="number">18</p></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box board"><p class="number">23</p></div>
            <div class="box board"><p class="number">24</p></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box board"><p class="number">27</p></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box board"><p class="number">43</p></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box board"><p class="number">47</p></div>
            <div class="box"></div>
        </div>
        <div class="row row5">
            <div class="box"></div>
            <div class="box"></div>
            <div class="box board"><p class="number">17</p></div>
            <div class="box board"><p class="number">16</p></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box board"><p class="number">28</p></div>
            <div class="box"></div>
            <div class="box board"><p class="number">42</p></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box board"><p class="number">48</p></div>
            <div class="box"></div>
        </div>
        <div class="row row6">
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box board"><p class="number">15</p></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box board"><p class="number">29</p></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box board"><p class="number">41</p></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box board"><p class="number">49</p></div>
            <div class="box"></div>
            <div class="box"></div>
        </div>
        <div class="row row7">
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box board"><p class="number">14</p></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box board"><p class="number">30</p></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box board"><p class="number">40</p></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box board"><p class="number">50</p></div>
            <div class="box"></div>
            <div class="box"></div>
        </div>
        <div class="row row8">
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box board"><p class="number">13</p></div>
            <div class="box"></div>
            <div class="box board"><p class="number">31</p></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box board"><p class="number">39</p></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box board"><p class="number">51</p></div>
            <div class="box"></div>
            <div class="box"></div>
        </div>
        <div class="row row9">
            <div class="box"></div>
            <div class="box"></div>
            <div class="box board"><p class="number">10</p></div>
            <div class="box board"><p class="number">11</p></div>
            <div class="box board"><p class="number">12</p></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box board"><p class="number">32</p></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box board"><p class="number">38</p></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box board"><p class="number">52</p></div>
            <div class="box"></div>
        </div>
        <div class="row row10">
            <div class="box"></div>
            <div class="box board"><p class="number">9</p></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box board"><p class="number">33</p></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box board"><p class="number">37</p></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box board"><p class="number">53</p></div>
            <div class="box"></div>
        </div>
        <div class="row row11">
            <div class="box"></div>
            <div class="box board"><p class="number">8</p></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box board"><p class="number">34</p></div>
            <div class="box board"><p class="number">35</p></div>
            <div class="box board"><p class="number">36</p></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box board"><p class="number">54</p></div>
            <div class="box"></div>
        </div>
        <div class="row row12">
            <div class="box"></div>
            <div class="box"></div>
            <div class="box board"><p class="number">7</p></div>
            <div class="box board"><p class="number">6</p></div>
            <div class="box board"><p class="number">5</p></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box board"><p class="number">63</p></div>
            <div class="box board start left"><p class="number">64</p></div>
            <div class="box board start right"></div>
            <div class="box"></div>
            <div class="box board"><p class="number">55</p></div>
            <div class="box"></div>
        </div>
        <div class="row row13">
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box board"><p class="number">4</p></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box board"><p class="number">62</p></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box board"><p class="number">56</p></div>
            <div class="box"></div>
        </div>
        <div class="row row14">
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box board"><p class="number">3</p></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box board"><p class="number">61</p></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box board"><p class="number">57</p></div>
            <div class="box"></div>
            <div class="box"></div>
        </div>
        <div class="row row15">
            <div class="box"></div>
            <div class="box board start left"><p class="number">start</p></div>
            <div class="box board start right"></div>
            <div class="box board"><p class="number">1</p></div>
            <div class="box board"><p class="number">2</p></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box board"><p class="number">60</p></div>
            <div class="box board"><p class="number">59</p></div>
            <div class="box board"><p class="number">59</p></div>
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

    <?php
    include __DIR__ . '/tpl/body-end.php';
    /* Footer */
    include __DIR__ . '/tpl/footer.php';
    ?>
