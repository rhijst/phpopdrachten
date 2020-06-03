<?php
include "../include/header.php";
include "../include/aside.php";
include  "opdracht7.3/functions.php";

$date = date("Y-m-d");;

startConnection();
?>
<main id="wrapper">
    <h2>
        opdracht 7.4
    </h2>
    <h1>
        Nieuw grap toeveogen
    </h1>
    <form action="opdracht7.4.php" method="post">
        <table>
            <tr>
                <td>
                    Joke text
                </td>
                <td>
                    <input type="text" name="jokeText" id="jokeText">
                </td>
            </tr>
            <tr>
                <td>
                    Joke cluo
                </td>
                <td>
                    <input type="text" name="jokeClou" id="jokeClou">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit">
                </td>
            </tr>
        </table>
    </form>
    <?php

    if(isset($_POST['jokeText']))
    {
        // maak een nieuwe sql statment
        // alles selecteeren waar de opgezochte waarde in gevonden woord
        $query = "INSERT INTO dbo.joke VALUES ( '" . $_POST['jokeText'] . "','" . $_POST['jokeClou'] . "','" . $date . "')";
        $jokes = executeQuery($query);

        //geef melding als het gelukt is.
        echo "<h1>Grap toegevoegd!</h1>
                <p>
                    Bedankt voor het toevoegen van je grap. Hieronder zie je een overzicht van je grap:<br>
                    Joke text: ". $_POST['jokeText'] . "<br>
                    Joke Clou: ". $_POST['jokeClou'] ."<br>
                    <br>
                    <br>
                    <br>
                        <a href=\"../opdracht7.3/index.php\"> Bekijk grappen (opdracht 7.3)</a>
                </p>

            ";

    }
    ?>
</main>
<?php
include "../include/footer.php";
?>
