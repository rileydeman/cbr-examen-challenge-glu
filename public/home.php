<!doctype html>
<html lang="en-AU">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HOME | CBR examen rijbewijs B</title>

    <link rel="icon" href="">

    <!--    Linking of the css files-->
    <link rel="stylesheet" href="./public/assets/css/fonts.css">
    <link rel="stylesheet" href="./public/assets/css/style.css">
    <link rel="stylesheet" href="./public/assets/css/header.css">
    <link rel="stylesheet" href="./public/assets/css/footer.css">
    <link rel="stylesheet" href="./public/assets/css/home.css">

    <!--    Linking of the javascript files, defer = reading/link the file at last-->
    <script defer src="./public/assets/js/app.js"></script>
    <script defer src="./public/assets/js/home.js"></script>
</head>

<body>

    <header>
        <!--    Getting the header document-->
        <?php include "public/core/header.php" ?>
    </header>

    <main>
        <form action="" target="_self" method="post" id="startForm">
            <img id="cbrLogo" src="./public/assets/img/cbr-logo.png" alt="">
            <h1>theorie examen rijbewijs B (auto)</h1>
            <p>Welkom bij uw rijbewijs B theorie examen, vul hieronder uw gegevens in en klik daarna op "Start Examen".</p>

            <div id="inputFields">
                <div class="inputItem">
                    <p>Naam</p>
                    <input id="nameinput" type="text" name="name" placeholder="Vul hier uw voor en achternaam in">
                </div>

                <div id="submitButton">
                    <p>Start Examen</p>
                </div>
            </div>
        </form>
    </main>

    <footer>
        <!--    Getting the footer document-->
        <?php include "public/core/footer.php" ?>
    </footer>

</body>

</html>