let option1 = document.getElementById("option1");
let option2 = document.getElementById("option2");
let option3 = document.getElementById("option3");

option1.addEventListener("click", () => {
    option1.className = "options selected";
    option2.className = "options";
    option3.className = "options";
})

option2.addEventListener("click", () => {
    option1.className = "options";
    option2.className = "options selected";
    option3.className = "options";
})

option3.addEventListener("click", () => {
    option1.className = "options";
    option2.className = "options";
    option3.className = "options selected";
})

let timerSec = 8;
let timerText = document.getElementById("timerText");
timerText.innerHTML = timerSec;

let form = document.getElementById("choicesBox");

setInterval(timer, 1000)

function timer() {
    timerSec--;
    timerText.innerHTML = timerSec;

    if (timerSec == 0) {
        sendForm();
    }
}

function sendForm() {
    form.submit();
}

let nextIcon = document.getElementById("nextIcon");

nextIcon.addEventListener("click", (e) => {
    sendForm();
})