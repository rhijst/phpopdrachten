<?php
include "../include/header.php";
include "../include/aside.php";
?>
        <main id="wrapper">
            <h2>Uitwerkingen</h2>
            <?php

            //hier maak ik een paar variebelen aan.
                $trafficLightColor = "groen";
                $ambulanceComing = true;
                $driveOn = true;

            // hier maak ik een if else statement aan om de goede kleur tegeven.
                if ($trafficLightColor !="groen" || $ambulanceComing == true)
                {
                       $driveOn= false;
                }

                else
                {
                        $driveOn= true;
                }

                if ($driveOn == true)
                {
                        echo "<p style='color:green'> u mag nu door rijden </p>";
                }
                else
                {
                        echo "<p style='color:red'> u mag nu niet door rijden </p>";
                }
                ?>
<!--                hier voeg ik ik een tabel toe-->
            <table border="2px solid black">
                <tr>
                    <td>

                    <td>
                        groen
                    </td>

                    <td>
                        rood
                    </td>

                    <td>
                        oranje
                    </td>
                </tr>

                <tr>
                    <td>
                        true
                    </td>

                    <td>
                        false
                    <td>
                        false
                    </td>

                    <td>
                        false
                    </td>
                </tr>

                <tr>
                    <td>
                        false
                    </td>

                    <td>
                        true
                    <td>
                        false
                    </td>

                    <td>
                        false
                    </td>
                </tr>
            </table>

            <?php
            // hier maak ik deel 2 van de opdracht.
            echo "<br> Opdracht 2b <br><br>";
            $countryName= "België";
            $currentAge= "17";

            if ($countryName == "België" && $currentAge == 16 || $countryName == "Bulgarije" && $currentAge >= 17 || $countryName == "België" && $currentAge == 17 || $countryName == "zwede" && $currentAge <= 18)
            {
                echo "je woont in " . $countryName ." en bent " .$currentAge . " jaar oud. ";
                echo "je mag hier zwakke alcohol drinken.";
            }
            elseif ($countryName == "België" && $currentAge >= 18 || $countryName == "zwede" && $currentAge >= 20 || $countryName == "Cyprus" && $currentAge >= 17 || $countryName == "Nederland" && $currentAge >= 18)
            {
                echo "je woont in " . $countryName . " en bent " . $currentAge . " jaar oud. ";
                echo "je mag hier alle alcoholishe dranken drinken.";
            }
            elseif ($countryName == "België" && $currentAge < 16 || $countryName == "Bulgarije" && $currentAge < 18 || $countryName == "Cyprus" && $currentAge < 17 || $countryName == "Nederland" && $currentAge <= 18 || $countryName == "zwede" && $currentAge <= 18)
            {
                echo "je woont in " . $countryName . " en bent " . $currentAge . " jaar oud. ";
                echo "je mag hier *geen* alcoholishe dranken drinken.";
            }
            else{
                echo "er is iets mis gegaan probeer het opnie denk aan de spelling van het land en de hoofdletter.";
            }

            ?>
        </main>
<?php
include "../include/footer.php"
?>
