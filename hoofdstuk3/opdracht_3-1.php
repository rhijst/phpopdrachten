<?php
include "../include/header.php";
include "../include/aside.php";
?>
        <main id="wrapper">
            <h2>Uitwerkingen</h2>
            <?php
                $event = "Elfstedentocht";
                $Alvestedetocht = "Alvestêdetocht";
                $distance = 200;
                $skatingtour = "schaatstocht";
                $naice = "natuurijs";
                $koning = "Koninglijkje Vereniging De Friesche elf steden";
                $place = "Leeuwarden";
                $friesland = "friesland";
                $vifteen = 15;
                $first = 1909;
                $one = 1;

                $verhaal = "<p> 
                                De " . $event . " (Fries:  " . $Alvestedetocht . ") is een " . $distance .
                                " kilometer lange " . $skatingtour . " over " . $naice . " die wordt georganiseerd door de hoofdstad van " .
                                $koning . ". " . $place . ", de hoofdstad van " . $friesland . ", is start- en aankomstplaats. de " .
                                $event . " is inmiddels " . $vifteen  ." maal verreden en werd voor het eerst in " .
                                $first . " gereden en wordtmaximaal " . $one . " keer per winter gehouden." .
                            "</p>";
                    echo $verhaal;
                    

                ?>
        </main>
<?php
include "../include/footer.php"
?>

