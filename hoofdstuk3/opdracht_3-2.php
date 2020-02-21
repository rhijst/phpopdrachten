<?php
include "../include/header.php";
include "../include/aside.php";
?>
        <main id="wrapper">
            <h2>Uitwerkingen</h2>
            <?php
                $trafficLightColor= "groen";
                $ambulanceComing= false;
                $driveOn = true;

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
            $countryName= "";
            $currentAge= "";

            if ($currentAge <= 18)
            {

            }
            elseif ($countryName == België)


            ?>
        </main>
<?php
include "../include/footer.php"
?>
