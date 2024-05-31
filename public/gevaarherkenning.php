<?php
$q = $_GET["q"] - 1;

session_start();

if (!isset($_SESSION["exam"])) {
    $_SESSION["exam"] = ["user" => "", "onderdelen" => ["gevaarherkenning" => [], "kennis" => [], "inzicht" => []]];
}

$name = $_SESSION["exam"]['user'];

$question = $_SESSION["exam"]['onderdelen']['gevaarherkenning'][$q];
?>

<!doctype html>
<html lang="en-AU">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gevaarherkenning | CBR examen rijbewijs B</title>

    <link rel="icon" href="">

    <!--    Linking of the css files-->
    <link rel="stylesheet" href="./public/assets/css/fonts.css">
    <link rel="stylesheet" href="./public/assets/css/style.css">
    <link rel="stylesheet" href="./public/assets/css/header.css">
    <link rel="stylesheet" href="./public/assets/css/footer.css">
    <link rel="stylesheet" href="./public/assets/css/gevaarherkenning.css">

    <!--    Linking of the javascript files, defer = reading/link the file at last-->
    <script defer src="./public/assets/js/app.js"></script>
    <script defer src="./public/assets/js/gevaarherkenning.js"></script>
</head>

<body>

    <header>
        <!--    Getting the header document-->
        <?php include "core/header.php" ?>
    </header>

    <main>
        <div id="quizBox">
            <div id="questionBox">
                <p><?= $question["question"] ?></p>
            </div>
            <div id="deRest">
                <div id="pictureBox">
                    <img id="quizPicture" src="./public/assets/img/question-images/<?= $question["image"] ?>">
                </div>
                <form action="../app/controllers/progress-gevaarherkenning-question.php" method="post" id="choicesBox">

                    <label for="option1radio" class="options" id="option1">
                        <div class="option">1.</div>
                        <div class="optionTekst">Remmen</div>
                        <input type="radio" name="answer" id="option1radio" value="0">
                    </label>
                    <label for="option2radio" class="options" id="option2">
                        <div class="option">2.</div>
                        <div class="optionTekst">Gas loslaten</div>
                        <input type="radio" name="answer" id="option2radio" value="1">
                    </label>
                    <label for="option3radio" class="options" id="option3">
                        <div class="option">3.</div>
                        <div class="optionTekst">Niets</div>
                        <input type="radio" name="answer" id="option3radio" value="2">
                    </label>

                    <input type="hidden" name="questionNumber" value="<?= $q ?>">

                </form>
            </div>
        </div>
    </main>

    <footer>
        <!--    Getting the footer document-->
        <?php include "core/footer.php" ?>
    </footer>

</body>

</html>