<?php
include "../include/header.php";
include "../include/aside.php";
?>
<main id="wrapper">
    <h2>Uitwerkingen</h2>
</main>
<?php
// Database SQL - Van de Wetering,
// Javascript - Va de Wetering,
// Rekenen - Van Meer,
// Nederlands,
// L&B - Lambregts,
// PHP - Evers,
// ASP - Gijsbrechts,
// Modelleren - Gijsbrechts,
// Digtale vaardigheden - Pielage
// Computertekenen - Van den Berg
// Engels - Mitrovic

$courseName = "ASP";
$teacherName = "";
//hier maak ik een switch aan
switch ($courseName)
{
    case "PHP":
        echo "Voor het vak ". $courseName ." je docent is Evers";
        break;
    case "Database SQL":
        echo "Voor het vak ". $courseName ." je docent is van de Wetering";
        break;
    case "Rekenen":
        echo "Voor het vak ". $courseName ." je docent is Van Meer";
        break;
    case "Javascript":
        echo "Voor het vak ". $courseName ." je docent is Van de Wetering";
        break;
    case "L&B":
        echo "Voor het vak ". $courseName ." je docent is Lambrechts";
        break;
    case "ASP":
        echo "Voor het vak ". $courseName ." je docent is Gijsbrechts";
        break;
    case "Modelleren":
        echo "Voor het vak ". $courseName ." je docent is Gijsbrechts";
        break;
    case "Digitale vaardigheden":
        echo "Voor het vak ". $courseName ." je docent is Pielage";
        break;
    case "computerteken":
        echo "voor het vak ". $courseName ." je docent is van de Van den Berg";
        break;
    case "engels":
        echo "voor het vak ". $courseName ." je docent is Mitrovic";
        break;
    default:
        echo "heb je een spelfout?";
}
include "../include/footer.php"
?>
