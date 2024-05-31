<?php
$q = $_GET["q"] - 1;

session_start();

if (!isset($_SESSION["exam"])) {
    $_SESSION["exam"] = ["user" => "", "onderdelen" => ["gevaarherkenning" => [], "kennis" => [], "inzicht" => []]];
}

$name = $_SESSION["exam"]['user'];

$question = $_SESSION["exam"]['onderdelen']['kennis'][$q];

function shuffle_assoc($my_array)
{
    // Get the keys of the associative array
    $keys = array_keys($my_array);

    // Shuffle the keys
    shuffle($keys);

    // Initialize an empty array to store the shuffled associative array
    $new = array();

    // Iterate through the shuffled keys
    foreach ($keys as $key) {
        // Assign each key-value pair to the new array in shuffled order
        //$new[$key] = $my_array[$key];
        array_push($new, $my_array[$key]);
    }

    // Update the original array with the shuffled result
    $my_array = $new;

    // Return the shuffled associative array
    return $my_array;
}
?>

<!doctype html>
<html lang="en-AU">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kennis | CBR examen rijbewijs B</title>

    <link rel="icon" href="">

    <!--    Linking of the css files-->
    <link rel="stylesheet" href="./public/assets/css/fonts.css">
    <link rel="stylesheet" href="./public/assets/css/style.css">
    <link rel="stylesheet" href="./public/assets/css/header.css">
    <link rel="stylesheet" href="./public/assets/css/footer.css">
    <link rel="stylesheet" href="./public/assets/css/kennis.css">

    <!--    Linking of the javascript files, defer = reading/link the file at last-->
    <script defer src="./public/assets/js/app.js"></script>
    <script defer src="./public/assets/js/kennis.js"></script>
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
                <form action="../app/controllers/progress-kennis-question.php" method="post" id="choicesBox">

                    <?php
                    $options = shuffle_assoc($question["options"]);
                    $optionNum = 0;

                    foreach ($options as $option) {
                        if ($option != "") {
                            $optionNum++;
                    ?>

                    <label for="<?= $optionNum ?>radio" class="options" id="option<?= $optionNum ?>">
                        <div class="option"><?= $optionNum ?></div>
                        <div class="optionTekst"><?= $option ?></div>
                        <input type="radio" name="answer" id="<?= $optionNum ?>radio" value="<?= $option ?>">
                    </label>

                    <?php }} ?>

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