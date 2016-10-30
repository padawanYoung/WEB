
var x1 = getRandomInt(0, 100);
var x2 = getRandomInt(0, 100);
var sum = x1 + x2;
document.getElementById("quest").innerHTML = "Сколько будет " + x1 + "\+" + x2 + "\?";

var i = document.getElementById("im");
var y = getRandomInt(5, 75) + "%";
var x = getRandomInt(5, 75) + "%";
i.style.top = y;
i.style.left = x;

function getRandomInt(min, max) {

    return Math.floor(Math.random() * (max - min + 1) + min);
}

var pos = 0, neg = 0;
var check = false;

function test (sum) {

    var res = document.getElementById("result");
    if (+document.getElementById("in").value == sum) {
        res.innerHTML = "<div id='gen'>Последний ответ - правильный!</div>";
        res.style.background = "#00cc99";
        pos++;
        values();
    }
    if (isNaN(+document.getElementById("in").value)) {
        res.innerHTML = "<div id='gen'>Проверьте корректность ввода!</div>";
        res.style.background = "#ff6600";
        check = true;
    }
    else if (check == false) {
        res.innerHTML = "<div id='gen'>Последний ответ - не правильный!</div>";
        res.style.background = "#ff0000";
        neg ++;
        values();
    }
    res.innerHTML+= "Правильных ответов - " + pos + "; Не правильных - " + neg;
}

function values () {

    x1 = getRandomInt(0, 100);
    x2 = getRandomInt(0, 100);
    sum = x1 + x2;
    document.getElementById("quest").innerHTML = "Сколько будет " + x1 + "\+" + x2 + "\?";
    console.log(x1 + " " + x2 + " " + sum);
}

function change (){
    i = document.getElementById("im");
    y = getRandomInt(5, 75) + "%";
    x = getRandomInt(5, 75) + "%";
    i.style.top = y;
    i.style.left = x;

}