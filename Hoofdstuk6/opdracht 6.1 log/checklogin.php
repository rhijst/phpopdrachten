<?php

if ($_POST['username'] == '1' && $_POST['password'] == '1') {
    session_start();
    $_SESSION['username'] = $_POST['username'];
    header('location: welkom.php');
}
else
{
    // $message = "Ongeldige username/wachtwoord
//    $message = "Ongeldige username/wachtwoord";
    // {$_POST['username']}, probeer het nog eens.";

    include "../opdracht6.1.php";
}
