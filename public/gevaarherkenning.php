<!doctype html>
<html lang="en-AU">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
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
                <p>Vraag 1: Als je dit bord tegenkomt, wat moet je dan doen?</p>
            </div>
            <div id="deRest">
                <div id="pictureBox">
                    <img id="quizPicture" src="./public/assets/img/placeholder.png">
                </div>
                <div id="choicesBox">

                
                    <div class="options">
                        <div class="option">1.</div>
                        <div class="optionTekst">Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis minus id
                            suscipit praesentium, reprehenderit quasi fuga molestias vel, perspiciatis in consequatur?
                            Soluta temporibus deleniti natus ab voluptates facilis nulla a!</div>
                    </div>
                    <div class="options">
                        <div class="option">2.</div>
                        <div class="optionTekst">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio pariatur
                            exercitationem temporibus modi, dolor soluta asperiores eaque perspiciatis mollitia ab
                            voluptate
                            ducimus quaerat magni inventore eveniet quo natus! Laborum, molestias.</div>
                    </div>
                    <div class="options">
                        <div class="option">3.</div>
                        <div class="optionTekst">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime
                            praesentium
                            corrupti, quod deleniti alias consequatur nesciunt vel, maiores atque assumenda ea sed
                            adipisci
                            aliquid laudantium qui nihil distinctio. Ratione, nobis?</div>
                    </div>
                    <div class="options">
                        <div class="option">4.</div>
                        <div class="optionTekst">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti,
                            nihil
                            sed commodi a, incidunt illo reiciendis numquam ipsa veniam dolores eum rerum voluptatem,
                            laudantium reprehenderit mollitia eius doloremque architecto! Eos.</div>
                    </div>
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