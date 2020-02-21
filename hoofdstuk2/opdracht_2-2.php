<?php
include "../include/header.php";
include "../include/aside.php";
?>
<main id="wrapper">

    <h2>Uitwerkingen</h2>

    <!--    vannaf hier maak ik opdracht 2.2-->
    <?php
    $text1 = "Hallo";
    $text2 = "een makkelijke taal";
    $text3 = "toch z'n makkelijke taal";
    $text4 = "wat is";
    $text5 = "PHP";
    $text6 = "Nooit gedacht dat";
    $text7 = "De instalatie is best ingewikkeld";
    $text8 = "Fijn";
    $text9 = "?";
    $text10 = ".";
    $text11 = ",";
    $text12 = "<br>";
    $text13 = "is";
    $text14 = "Vindt je niet";
    $texttoch = "toch";

    // taak 2
    echo "<h2> taak 2 </h2>";
    echo "<p>" . $text1 . $text11 .$text4 . " " .  $text5 . " " .  $text3 . $text10 . " " .  $text7 . $text10 . " " .  $text8 . " " .  $texttoch . $text9 . $text6 . " ".  $text5 . " ".  $text3 . " ".  $text13 . $text10 . "</p>";

    // taak 3
    echo "<h2> taak 3</h2>";
    echo  "<p>". $text1 . $text10 ."<br>".  $text7 . " " . $text8 .  " toch dat " . $text3 . $text10 . " " . $text7 . $text10 . " " . $text14 . $text9 . "</p>";
    ?>
</main>
<?php
include "../include/footer.php"
?>





