<?php
include "../include/header.php";
include "../include/aside.php";
?>
<main id="wrapper">
    <h2>Uitwerkingen</h2>
    <h3>Stoplicht</h3>
    <div>
        <form method="post" action="opdracht_5-4.php">
            <table>
                <tr>
                    <td>
                        Komt er een ambulance aan?
                    </td>
                    <td>
                        <input type="radio" name="ambu" id="ambu" value="eenambu">Ja
                        <input type="radio" name="ambu" id="ambu" value="geenambu">Nee
                    </td>
                </tr>
                <tr>
                    <td>

                    </td>
                    <td>
                        <input type="radio" name="color" id="color" value="rood">Rood
                        <input type="radio" name="color" id="color" value="groen">Groen
                        <input type="radio" name="color" id="color" value="oranje">Oranje
                    </td>
                </tr>
                <td>
                    <tr>
                        <td>
                            <input type="submit">
                        </td>
                    </tr>
                </td>
            </table>
        </form>
    </div>
    <?php

    if (isset($_POST["ambu"]))
    {
        $ambustat = $_POST["ambu"];
        $ambumess = "wel ambu";
    }
    else
    {
        $ambustat = "";
    }

    if (isset($_POST["color"]))
    {
        $stoplichtkleur = $_POST["color"];
    }
    else
    {
        $stoplichtkleur ="";
    }

    if ($ambustat == "eenambu" && $stoplichtkleur == "rood" || $ambustat == "eenambu" && $stoplichtkleur == "Oranje" )
    {
        echo "
        <h2>
            wat is de situatie en wat moet ik doen?
        </h2>
        <div>
            Stoplicht staat op " . $stoplichtkleur . " en er komt een ambulance aan.<br>
            *u moet stoppen*
        </div>
        ";
    }
    elseif ($ambustat == "eenambu" && $stoplichtkleur == "groen")
    {
        echo " 
        <h2>
            wat is de situatie en wat moet ik doen?
        </h2>
        <div>
            Stoplicht staat op " . $stoplichtkleur . " en er komt een ambulance aan.<br>
            *u moet stoppen*
        </div>
        ";
    }
    elseif ($ambustat == "geenambu" && $stoplichtkleur == "groen")
    {
        echo " 
        <h2>
            wat is de situatie en wat moet ik doen?
        </h2>
        <div>
            Stoplicht staat op " . $stoplichtkleur . " en er komt geen ambulance aan.<br>
            *u mag door rijden*
        </div>
        ";
    }
    elseif ($ambustat == "geenambu" && $stoplichtkleur == "rood")
    {
        echo " 
        <h2>
            wat is de situatie en wat moet ik doen?
        </h2>
        <div>
            Stoplicht staat op " . $stoplichtkleur . " en er komt geen ambulance aan.<br>
            *u moet stoppen*
        </div>
        ";
    }
    elseif ($ambustat == "geenambu" && $stoplichtkleur == "oranje" || $ambustat == "geenambu" && $stoplichtkleur == "rood")
    {
        echo " 
        <h2>
            wat is de situatie en wat moet ik doen?
        </h2>
        <div>
            Stoplicht staat op " . $stoplichtkleur . " en er komt geen ambulance aan.<br>
            *u moet stoppen*
        </div>
        ";
    }
    else
    {
        echo "heeft u alle waarde ingevuld?";
    }
    ?>
</main>
<?php
include "../include/footer.php"
?>
