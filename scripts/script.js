function dice() {
    let out = document.getElementById("outputDice");
    let diced = Math.floor(Math.random()*6)+1;
    let image = "img/dice" + diced + ".png";
    out.innerHTML = "<img src='"+image+"'/>";
    return diced;
}