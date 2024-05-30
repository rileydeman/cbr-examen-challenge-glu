<?php
session_start();

if (!isset($_SESSION["exam"])) {
    $_SESSION["exam"] = ["user" => "", "onderdelen" => ["gevaarherkenning" => [], "kennis" => [], "inzicht" => []]];
}

$_SESSION["exam"] = ["user" => "", "onderdelen" => ["gevaarherkenning" => [], "kennis" => [], "inzicht" => []]];

$_SESSION["exam"]["user"] = testInput($_POST["name"]);

$questions = file_get_contents("../../public/assets/json/questions.json");
$questions = json_decode(preg_replace('/[\x00-\x1F\x80-\xFF]/', '', $questions), true);


//Gevaarherkenning
$gevaarherkenning = [];

foreach ($questions as $question) {

        if ($question["options"][0] == "0" OR $question["options"][0] == "1" OR $question["options"][0] == "2") {
            $rndNum = rand(0, 100);
            $useQuestion = "";

            if ($rndNum % 2 == 0) {
                $useQuestion = true;
            } else {
                $useQuestion = false;
            }

            if ($useQuestion) {
                array_push($gevaarherkenning, $question);
            }
        }

        if (count($gevaarherkenning) == 25) {
            break;
        }
}

$gevaarherkenning = shuffle_assoc($gevaarherkenning);
$_SESSION["exam"]["onderdelen"]["gevaarherkenning"] = $gevaarherkenning;


//Kennis

$kennis = [];

foreach ($questions as $question) {

    if ($question["category"] == "A" OR $question["category"] == "B" OR $question["category"] == "C" OR $question["category"] == "D" OR
        $question["category"] == "E" OR $question["category"] == "F" OR $question["category"] == "G" OR $question["category"] == "H" OR
        $question["category"] == "L" OR $question["category"] == "T" OR $question["category"] == "W") {
        $rndNum = rand(0, 100);
        $useQuestion = "";

        if ($rndNum % 2 == 0) {
            $useQuestion = true;
        } else {
            $useQuestion = false;
        }

        if ($useQuestion) {
            array_push($kennis, $question);
        }
    }

    if (count($kennis) == 12) {
        break;
    }
}

$kennis = shuffle_assoc($kennis);
$_SESSION["exam"]["onderdelen"]["kennis"] = $kennis;


//Kennis

$inzicht = [];

foreach ($questions as $question) {

    if ($question["category"] == "I" OR $question["category"] == "K" OR $question["category"] == "M" OR $question["category"] == "N" OR
        $question["category"] == "O" OR $question["category"] == "P" OR $question["category"] == "Q" OR $question["category"] == "R" OR
        $question["category"] == "S" OR $question["category"] == "U" OR $question["category"] == "V" OR $question["category"] == "X" OR
        $question["category"] == "Y" OR $question["category"] == "Z") {
        $rndNum = rand(0, 100);
        $useQuestion = "";

        if ($rndNum % 2 == 0) {
            $useQuestion = true;
        } else {
            $useQuestion = false;
        }

        if ($useQuestion) {
            array_push($inzicht, $question);
        }
    }

    if (count($inzicht) == 28) {
        break;
    }
}

$inzicht = shuffle_assoc($inzicht);
$_SESSION["exam"]["onderdelen"]["inzicht"] = $inzicht;



//Functions
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

function testInput($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

//Exit script
header("Location: /uitleg");
exit();
?>