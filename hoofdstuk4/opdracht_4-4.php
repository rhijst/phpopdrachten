<?php
include "../include/header.php";
include "../include/aside.php";
?>
<main id="wrapper">
    <h2>Uitwerkingen</h2>

    <?php
    for ($counter=0; $counter <= 7; $counter++)
        {
            $ENDay = date("D", strtotime("+$counter days"));
            $NLDay = "";
            $day = date("d-m-Y", strtotime("+$counter days"));

        switch ("ENDay")
        {
            case "Mon":
            $NLDay = "maandag";
            break;
            case "Tue":
            $NLDay = "dinsdag";
            break;
            case "Wed":
            $NLDay = "woensdag";
            break;
            case "Thu":
            $NLDay = "donderdag";
            break;
            case "Fri":
            $NLDay = "vrijdag";
            break;
            case "Sat":
            $NLDay = "zaterdag";
            break;
            case "Sun":
            $NLDay = "zondag";
            break;
        }

        if ($counter == 0)
        {
            echo "Vandaag is " . $NLDay . " " . $day;
        }
            elseif ($counter == 1) {
            echo "Morgen is " . $NLDay . " " . $day;
        }
            elseif ($counter == 2) {
            echo "Overmorgen is " . $NLDay . " " . $day;
        }
            else
                {
                    //aan taal repeats zijn counter hij zet er elke keer voor
            echo "Over" . (str_repeat("-over", ($counter-2))) . "morgen is " . $NLDay . " " . $day;
        }
            echo "<br />";
        }

?>
</main>
<?php
include "../include/footer.php"
?>
