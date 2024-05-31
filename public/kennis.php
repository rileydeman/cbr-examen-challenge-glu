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
    <script defer src="./public/assets/js/home.js"></script>
</head>

<body>

    <header>
        <!--    Getting the header document-->
        <?php include "core/header.php" ?>
    </header>

    <main>
        <div id="quizBox">
            <div id="questionBox">
                <p>
                    WAAR of NIET WAAR: Als je op de weg rijdt moet je uit je doppen kijken
                </p>
            </div>
            <div id="deRest">
                <div id="pictureBox">
                    <img id="quizPicture" src="./public/assets/img/placeholder.png">
                </div>
            </div>
            <br>
            <br>
            <div id="answersBox">
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
                    <input type="hidden" name="questionNumber" value="">
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