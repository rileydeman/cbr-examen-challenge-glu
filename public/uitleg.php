<?php
session_start();

if (!isset($_SESSION["exam"])) {
    $_SESSION["exam"] = ["user" => "", "onderdelen" => ["gevaarherkenning" => [], "kennis" => [], "inzicht" => []]];
}

$name = $_SESSION["exam"]['user'];
?>

<!doctype html>
<html lang="en-AU">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Uitleg | CBR examen rijbewijs B</title>

    <link rel="icon" href="">

    <!--    Linking of the css files-->
    <link rel="stylesheet" href="./public/assets/css/fonts.css">
    <link rel="stylesheet" href="./public/assets/css/style.css">
    <link rel="stylesheet" href="./public/assets/css/header.css">
    <link rel="stylesheet" href="./public/assets/css/footer.css">
    <link rel="stylesheet" href="./public/assets/css/uitleg.css">

    <!--    Linking of the javascript files, defer = reading/link the file at last-->
    <script defer src="./public/assets/js/app.js"></script>
    <script defer src="./public/assets/js/uitleg.js"></script>
</head>

<body>

    <header>
        <!--    Getting the header document-->
        <?php include "core/header.php" ?>
    </header>

    <main>
    <div id="bigBoyParentContainer">
        <div id="contentBox1">
            <img id="fillerImage" src="./public/assets/img/lachendmeisje.png">
            <div id="textBox1">
                <p class="containerText" id="initialText">
                    Goedendag <span class="important-word"><?= $name ?></span>! <br><br> Leuk dat je je <span class="important-word">RIJBEWIJS</span> wilt gaan halen! Om te voldoen aan de <span class="important-word">NATIONAAL WETTELIJKE EISEN</span>, moet je slagen in 3 vakgebieden: <span class="important-word">GEVAARHERKENNING</span>, <span class="important-word">KENNIS</span> en <span class="important-word">INZICHT</span>.
                </p>
                <hr id="separatorLine" style="display: none;"/>
                <p id="additionalText" class="containerText" style="display: none;">
                    <span class="important-word">- GEVAARHERKENNING:</span> hier mag u maximaal 12 van de 25 fout hebben. <br><br>
                    <span class="important-word">- KENNIS:</span> hier mag u maximaal 2 van de 12 fout hebben. <br><br>
                    <span class="important-word"- >INZICHT</span>  hier mag u maximaal 3 van de 28 vragen fout hebben.
                </p>
                <button id="toggleButton" class="arrow-button">▼</button>
            </div>
        </div>
        <div id="divider"></div>
        <div id="contentBox2">
            <img id="fillerImage2" src="./public/assets/img/lachendmeisje2.png">
            <div id="textBox2">
                <p class="containerText" id="initialText2">
                    Klaar met lezen? Klik op de knop en <br><span class="important-word">START HET EXAMEN!</span>
                </p>
                <a href="./gevaarherkenning?q=1">
                    <img src="./public/assets/img/video.png" style="width:200px;height:200px;object-fit:contain;margin-left:150px;margin-top:50px;">
                </a>
            </div>
        </div>
    </div>
</main>


    <footer>
        <!--    Getting the footer document-->
        <?php include "core/footer.php" ?>
    </footer>
</body>

</html>