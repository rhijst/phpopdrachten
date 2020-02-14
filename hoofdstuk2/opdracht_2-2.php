<!<!DOCTYPE html>


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
</body>
</html>





