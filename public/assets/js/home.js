let nameInput = document.getElementById("nameinput");
nameInput.focus();

let form = document.getElementById("startForm");
let submitButton = document.getElementById("submitButton");

let body = document.getElementById("body");

submitButton.addEventListener("click", (e) => {
    form.submit();
})