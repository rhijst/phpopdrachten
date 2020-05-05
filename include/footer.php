
<footer>
    <?php
        /**
         *User: Thijs Teerhuis
         *Date: 21-2-2020
         *Time: 13:38
         * File footer.php
         */
        require "../hoofdstuk3/opdracht_3.3/variabelen.php";

        echo "     " . $year . "    ";
        echo $name;
        echo $date;
        echo "<br>";
        ?>
    <?php
    //opdracht 6.1 code

//    session_start();
    if (isset($_SESSION['username']))
    {
        $bezoeker = $_SESSION['username'] . "&nbsp;<a href='/phpopdrachten/hoofdstuk6/loguit.php'>Loguit</a>";
    }
    else
    {
        $bezoeker = "onbekende bezoeker" . " <a href='/phpopdrachten/hoofdstuk6/opdracht61.php'>Login</a>";
    }
//    print vervolgens ook de $bezoeker zodat je de volgende visuele
//    weergave in de pagina ziet
    print_r($bezoeker);
    ?>
</footer>
</body>
</html>

