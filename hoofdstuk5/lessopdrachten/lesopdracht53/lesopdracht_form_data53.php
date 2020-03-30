<?php
//Haal de formulier gegevens op
//include hieronder "lesopdracht_function.php" die de naam van de docent terug geeft.
include "lesopdracht_functions53.php";
?>
<table>
    <tr>
        <td>
            Voornaam
        </td>
        <td>
<!--            *Toon hier de ingevulde naam*-->
            <?php
            echo $_GET["firstname"]
            ?>
        </td>
    </tr>
    <!-- Begin: Toon dit alleen als er een tussenvoegsel is ingevuld! -->
    <tr>
        <td>
            Tussenvoegsel
        </td>
        <td>
<!--            *Toon hier tussenvoegsel als deze bestaat *-->
            <?php
            if(!empty($_GET["tussenvoegsel"] ))
            {
                echo $_GET["tussenvoegsel"];
            }
            ?>
        </td>
    </tr>
    <!-- Einde: Toon dit alleen als er een tussenvoegsel is ingevuld! -->
    <tr>
        <td>
            Achternaam
        </td>
        <td>
<!--            *Toon hier de ingevulde achternaam*-->
            <?php
                echo $_GET["lastname"]
            ?>
        </td>
    </tr>
    <tr>
        <td>
            Meer informatie
        </td>
        <td>
<!--            *Laad hier de functie die de naam van de juiste docent toont*-->
            <?php
                echo getTeacherName();
            ?>
        </td>
    </tr>
</table>