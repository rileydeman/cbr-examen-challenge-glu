<?php
session_start();

if (!isset($_SESSION["exam"])) {
    $_SESSION["exam"] = ["user" => "", "onderdelen" => ["gevaarherkenning" => [], "kennis" => [], "inzicht" => []]];
}

$answer = "";

if (isset($_POST["answer"])) {
    $answer = testInput($_POST["answer"]);
}

$questionNumber = testInput($_POST["questionNumber"]);

$_SESSION["exam"]["antwoorden"]["gevaarherkenning"][$questionNumber] = $answer;

//echo $_SESSION["exam"]["antwoorden"][$questionNumber];

function testInput($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


$nexQuestion = $_POST["questionNumber"] + 2;

if ($nexQuestion <= 25) {
    header("Location: ../../gevaarherkenning?q=" . $nexQuestion);
} else {
    header("Location: ../../kennis?q=1");
}

exit();
?>