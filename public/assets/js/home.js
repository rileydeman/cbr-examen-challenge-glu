let nameInput = document.getElementById("nameinput");
nameInput.focus();

let form = document.getElementById("startForm");
let submitButton = document.getElementById("submitButton");

submitButton.addEventListener("click", (e) => {
    form.submit();
})