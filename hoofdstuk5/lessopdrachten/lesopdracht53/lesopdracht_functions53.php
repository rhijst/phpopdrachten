<?php
/*************
 * Maak hier een functie genaamd "getTeacherName" die als return de juiste docent naam mee geeft.
 **************/

function getTeacherName(){
    //Zorg dat je hier de juiste docentnaam met een return terug stuurt.
            if(isset($_GET['subject']) && $_GET['subject'] == 'php')
            {
                $text = "Remco Evers";
            }
            else
            {
                $text = "Martijn Van De Wetering";
            }
    return $text;
}


?>