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

$courseName = "engels";
$docent = "";
//hier maak ik een switch aan
switch ($courseName)
{
    case "PHP":
        $docent = " Evers";
        break;
    case "Database SQL":
        $docent = " van de Wetering";
        break;
    case "Rekenen":
        $docent = " Van Meer";
        break;
    case "Javascript":
        $docent = " Van de Wetering";
        break;
    case "L&B":
        $docent = " Lambrechts";
        break;
    case "ASP":
        $docent = "Gijsbrechts";
        break;
    case "Modelleren":
        $docent = " Gijsbrechts";
        break;
    case "Digitale vaardigheden":
        $docent = " Pielage";
        break;
    case "computerteken":
        $docent = " Van den Berg";
        break;
    case "engels":
        $docent = " Mitrovic";
        break;

}
echo "je docent is " . $docent . " en het vak is " . $courseName ;
include "../include/footer.php"
?>
