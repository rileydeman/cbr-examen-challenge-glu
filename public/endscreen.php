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
    <link rel="stylesheet" href="./public/assets/css/endscreen.css">

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
        <div id="parentContainer">
            <div id="div1" style="width:750px;"></div>
            <div id="div2">
                <div id="resultContainer">
                    <?php
                    //vervang al deze variables met je eigen shit
                    $testVariable = false; // Ben je geslaagd of niet? true = geslaagd, false = gefaald
                    $vragenTotaal = 28; // totaal aantal vragen (maak 3 variables per vakgebied, of doe het lekker zoals jij het wilt)
                    $vragenFout = 3; // Aantal vragen fout van gevaarsherkenning
                    $vragenFout2 = 5; // Aantal vragen fout van Kennis
                    $vragenFout3 = 2; // Aantal vragen fout van Kennis
                    

                    // Alles wat deze if statements doen is de kleuren veranderen. Als ie false is, wordt alles rood, duimpje omlaag
                    if ($testVariable == false) {
                        ?>
                        <style>
                            #resultContainer {
                                border: 2px solid red;
                            }

                            #bigBox {
                                border: 2px solid red;
                            }
                        </style>
                        <img id="failImage" src="./public/assets/img/gefaald.png"
                            style="width:300px;height:300px;object-fit:contain;">
                    </div>
                    <?php

                        // Als ie true is, wordt alles groen, duimpje omhoog
                    } else if ($testVariable == true) {
                        ?>
                        <style>
                            #resultContainer {
                                border: 2px solid green;
                            }

                            #bigBox {
                                border: 2px solid green;
                            }
                        </style>
                        <img id="passImage" src="./public/assets/img/geslaagd.png"
                            style="width:300px;height:300px;object-fit:contain;">
                    </div>

                <?php
                    }
                    ?>
            <div id="bigBox">
                <?php


                // MAAK DIT MEER EFFICIENT ALSJEBLIEFT!!!!
                if ($vragenFout <= 3) {
                    ?>
                    <style>
                        .important-word {
                            color: red;
                        }
                    </style> <?php
                } else if ($vragenFout > 3) {
                    ?>
                        <style>
                            .important-word {
                                color: green;
                            }
                        </style> <?php
                }

                if ($vragenFout2 <= 3) {
                    ?>
                    <style>
                        .important-word2 {
                            color: red;
                        }
                    </style> <?php
                } else if ($vragenFout2 > 3) {
                    ?>
                        <style>
                            .important-word2 {
                                color: green;
                            }
                        </style> <?php
                }

                if ($vragenFout3 <= 3) {
                    ?>
                    <style>
                        .important-word3 {
                            color: red;
                        }
                    </style> <?php
                } else if ($vragenFout3 > 3) {
                    ?>
                        <style>
                            .important-word3 {
                                color: green;
                            }
                        </style> <?php
                }

                //Hiero laat ie dus zien hoeveel van de hoeveel vragen fout zijn. Die classes kun je wsl zo regelen dat ze niet genummerd hoeven te zijn
                //Maar denk dat de variabelen wel genummerd moeten blijven. Maar ja jij bent de expert dus doe lekker je ding :)
                ?>
                <p class="hvlVragenFout">Gevaarherkenning: <span
                        class="important-word"><?= $vragenFout . " van de " . $vragenTotaal . " fout." ?></span>
                </p>
                <p class="hvlVragenFout">Kennis: <span
                        class="important-word2"><?= $vragenFout2 . " van de " . $vragenTotaal . " fout." ?></span>
                </p>
                <p class="hvlVragenFout">Inzicht: <span
                        class="important-word3"><?= $vragenFout3 . " van de " . $vragenTotaal . " fout." ?></span>
                </p>
                <br>
                <br>
                    <?php
                    if($testVariable == false) {
                        ?> <p style="font-size:30px;font-weight:900;">Je bent <span style="color:red;font-weight:bold;font-size:50px;">GEFAALD</span></p> <?php
                    } else if($testVariable == true) {
                        ?> <p style="font-size:30px;font-weight:900">Je bent <span style="color:green;font-weight:bold;font-size:50px;">GESLAAGD</span></p> <?php
                    }
                    ?>
            </div>
        </div>
        <div id="div3">
        </div>
        </div>
    </main>

    <footer>
        <!--    Getting the footer document-->
        <?php include "core/footer.php" ?>
    </footer>

</body>

</html>