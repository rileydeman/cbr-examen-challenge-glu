let form = document.getElementById("choicesBox");

function sendForm() {
    form.submit();
}

let options = document.getElementsByClassName('options');


for (let i = 0; i < options.length; i++) {
    options[i].addEventListener('click', (e) => {
        for (let j = 0; j < options.length; j++) {
            options[j].className = "options";
        }
        options[i].className = "options selected";
    })
}

let timerSec = 40;
let timerText = document.getElementById("timerText");
timerText.innerHTML = timerSec;

setInterval(timer, 1000)

function timer() {
    timerSec--;
    timerText.innerHTML = timerSec;

    if (timerSec == 0) {
        sendForm();
    }
}

let nextIcon = document.getElementById("nextIcon");

nextIcon.addEventListener("click", (e) => {
    sendForm();
})