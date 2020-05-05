<?php
include "../include/header.php";
include "../include/aside.php";
include "script.php";
?>
<main id="wrapper">
    <h2>Uitwerkingen</h2>
        <?php
        ////poging weg haalen log in screen

            if ($ShowScreenLog == true)
            {
////////////
        /// // isset of hij bestaat
        /// //empty chekcekn waarden leeg is of niet
        ///
        /// // is in URL
        /// // post niet
        ?>
            <h1>
                Bergheen
            </h1>

            <p>
                Login om onze adesgegevens + openingstijden te zien
            </p>

            <form action="login.php" method="get">
                <table>
                    <tr>
                        <td>
                            <label for="username">username</label>
                        </td>
                        <td>
                            <input type="text" id="username" name="username">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <?php
                            echo $message;
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="password">password</label>
                        </td>
                        <td>
                            <input type="password" id="password" name="password">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="submit" name="submit">
                        </td>
                    </tr>
                </table>
            </form>
            <?php
                ////pogin weg haalen van log in screen
        }
//        else
//        {
//////////////////

////            dit werkte maar volgens mij is dit niet de goede manier
//            if (isset($_GET["submit"])) {
//            //iets uitvooren nadat er op de knop is gedrukt
//         if ($_GET["username"] == "docent" && $_GET["password"] == "ttudens" ||
//             $_GET["username"] == "student" && $_GET["password"] == "ttudens" ||
//             $_GET["username"] == "gebruiker" && $_GET["password"] == "rebruikeg" ||
//             $_GET["username"] == "Tijger" && $_GET["password"] == "rijget" ||
//             $_GET["username"] == "Aap" && $_GET["password"] == "paa"||
//             $_GET["username"] == "aap" && $_GET["password"] == "Donald Kucd" ||
//             $_GET["username"] == "Dagobert" && $_GET["password"] == "Tagoberd" ||
//             $_GET["username"] == "T-Dog" && $_GET["password"] == "G-Dot"||
//             $_GET["username"] == "kwik" && $_GET["password"] == "kwik"||
//             $_GET["username"] == "Maroon" && $_GET["password"] == "Naroom"||
//             $_GET["username"] == "1" && $_GET["password"] == "1")
//         {
//            $ShowScreenLog = False;
//             echo "
//                    <h2>
//                        Berghoon
//                    </h2>
//                    <p>
//                        Welkom!
//                    </p>
//                    <fieldset>
//                        <legend>
//                            Openingstijden
//                        </legend>
//                        <p>
//                            Do:22:00<br>
//                            Vr:All day<br>
//                            Za:All day<br>
//                            Zo:12:00<br>
//                        </p>
//                    </fieldset>
//
//
//
//
//                      <fieldset>
//                        <legend>
//                            Adresgegevens
//                        </legend>
//                        <p>
//                            Am Wriezener Bahnhof<br>
//                            10243 Berlin<br>
//                            Duitsland<br>
//                        </p>
//                    </fieldset>
//                ";
//         }
//         else
//         {
//             echo "
//        <h2>
//            weet u zeker dat u de gegevens goed heeft ingevoerd?
//        </h2>
//        ";
//         }
///////////////////////////////////////////////////////////////////////////////////////////////////////
                //niewe manier
                if($ShowScreenLog == false)
            {

                            echo "
                                    <h2>
                                        Berghoon
                                    </h2>
                                    <p>
                                        Welkom!
                                    </p>
                                    <fieldset>
                                        <legend>
                                            Openingstijden
                                        </legend>
                                        <p>
                                            Do:22:00<br>
                                            Vr:All day<br>
                                            Za:All day<br>
                                            Zo:12:00<br>
                                        </p>
                                    </fieldset>

                                      <fieldset>
                                        <legend>
                                            Adresgegevens
                                        </legend>
                                        <p>
                                            Am Wriezener Bahnhof<br>
                                            10243 Berlin<br>
                                            Duitsland<br>
                                        </p>
                                    </fieldset>
                                ";
            }
////poging weg haalen loginscreen
//        }
    ?>
</main>
<?php
include "../include/footer.php"
?>

