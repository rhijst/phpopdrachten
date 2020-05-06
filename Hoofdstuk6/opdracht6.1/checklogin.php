<?php

// de inlog gegevens aanmaaken
$gegevens = Array(
    "Abu" => "bekend",
    "Nordin" => "onbekend",
    "BasZ" => "654321",
    "Rosalie" => "bloemblaadjes",
    "1"=> "1"
);

// dit stukje code stond in de opdracht
//if ($_POST['username'] == '1' && $_POST['password'] == '1')
//{
//    session_start();
//    $_SESSION['username'] = $_POST['username'];
//    header('location: welkom.php');
//}
//else
//{
//    // $message = "Ongeldige username/wachtwoord
////    $message = "Ongeldige username/wachtwoord";
//    // {$_POST['username']}, probeer het nog eens.";
//    header('location: ../opdracht6.1.php');
//}

///////////////////
// ik heb nu deze gebruikt om met de gegevens van de array in te kunnen loggen ik begreep het niet goed maar ik denk dat dit gevraagt is.
    foreach ($gegevens as $key => $value)
    {
        // ||$_GET["username"] == NULL ||$_GET["password"] == NULL
        if ($_POST["username"] == $key && $_POST["password"] == $value)
        {
            session_start();
            $_SESSION['username'] = $_POST['username'];
            header('location: welkom.php');
        }
        else
        {
        // {$_POST['username']}, probeer het nog eens.";
        header('location: ../opdracht6.1.php');

        }
    }

