<!DOCTYPE html>


<?php
/**
 *User: Thijs Teerhuis
 *Date: 5-2-2020
 *Time: 13:38
 * File index.php
 */
?>
<html lang="nl">
    <head>
        <title>

        </title>
        <meta charset="utf-8">
        <meta name="description" content="opdracht X">
        <meta name="keywords" content="keyword 1, keyword 2">
        <meta name="viewport" content="width=divce=width, initial-scale">
        <link href="../CSS/index-Stylesheet.css" type="text/css" rel="stylesheet">
    </head>
    <body>
        <header>
            <h1><?php echo "Uitwerking van PHP-opdrachten";?></h1>
        </header>
        <aside>
            <h2>Menu</h2>
            <a href="../index.php">Home</a>
            <ul>
                <li>
                    Hoofdstuk 2
                    <ul>
                        <li>
                            <a href="../hoofdstuk2/opdracht_2-1.php">Opdracht 2.1</a>
                        </li>
                        <li>
                            <a href="../hoofdstuk2/opdracht_2-2.php">Opdracht 2.2</a>
                        </li>
                    </ul>
                </li>
                <li>
                    Hoofdstuk 3
                    <ul>
                        <li>
                            <a href="../hoofdstuk3/opdracht_3-1.php">Opdracht 3.1</a>
                        </li>
                        <li>
                            <a href="../hoofdstuk3/opdracht_3-2.php">Opdracht 3.2</a>
                        </li>
                        <li>
                            <a href="../hoofdstuk3/opdracht_3-2.php">Opdracht 3.3</a>
                        </li>
                    </ul>
                </li>

                <li>
                    Hoofdstuk 4
                    <ul>
                        <li>
                            <a href="../hoofdstuk4/opdracht_4-1.php">Opdracht 4.1</a>
                        </li>
                        <li>
                            <a href="../hoofdstuk4/opdracht_4-1.php">Opdracht 4.2</a>
                        </li>
                        <li>
                            <a href="../hoofdstuk4/opdracht_4-1.php">Opdracht 4.3</a>
                        </li>
                        <li>
                            <a href="../hoofdstuk4/opdracht_4-1.php">Opdracht 4.4</a>
                        </li>
                    </ul>
                </li>

                <li>
                    Hoofdstuk 5
                    <ul>
                        <li>
                            <a href="../hoofdstuk5/opdracht_5-1.php">Opdracht 5.1</a>
                        </li>
                        <li>
                            <a href="../hoofdstuk5/opdracht_5-2.php">Opdracht 5.2</a>
                        </li>
                        <li>
                            <a href="../hoofdstuk5/opdracht_5-3.php">Opdracht 5.3</a>
                        </li>
                        <li>
                            <a href="../hoofdstuk5/opdracht_5-4.php">Opdracht 5.4</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </aside>
        <main id="wrapper">
            <h2>Uitwerkingen</h2>
            <?php
                $event = "Elfstedentocht";
                $Alvestedetocht = "Alvestêdetocht";
                $distance = "200";
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
    </body>
</html>
