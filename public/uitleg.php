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
                    Bij <span class="important-word">GEVAARHERKENNING</span> moet je altijd kiezen tussen 3 keuzes: gas inhouden, remmen of stoppen. Bij de <span class="important-word">KENNISVRAGEN</span> is het de vraag of het <span class="important-word">WAAR</span> of <span class="important-word">NIET WAAR</span> is. Bij de <span class="important-word">INZICHTSVRAGEN</span> krijg je een scenario en je moet aangeven wat de beste actie is. Je moet alle drie de vakgebieden met een voldoende afronden om je rijbewijs te halen. Lukt dat niet? Dan moet je het examen opnieuw afleggen.
                </p>
                <button id="toggleButton" class="arrow-button">▼</button>
            </div>
        </div>
        <div id="divider"></div>
        <div id="contentBox2">
            <img id="fillerImage2" src="./public/assets/img/lachendmeisje2.png">
            <div id="textBox2">
                <p class="containerText" id="initialText2">
                    Klaar met lezen? Klik op de knop en <span class="important-word">START DE TEST!</span>
                </p>
                <a href="./home.php">
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