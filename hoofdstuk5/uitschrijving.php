<?php
?>
<h2>
    Uitschrijving KW1C
</h2>
<hr>
<table>
    <tr>
        <td>
            Voor en achternaam
        </td>
        <td>
            <?php
            echo $_GET["fulName"];
            ?>
        </td>
    </tr>
    <tr>
        <td>
            Studenten nummer
        </td>
        <td>
            <?php
            echo $_GET["studenetnumer"];
            ?>
        </td>
    </tr>
    <tr>
        <td>
            Datum van uitschrijving
        </td>
        <td>
            <?php
            echo $_GET["dateout"];
            ?>
        </td>
    </tr>
    <tr>
        <td>
            Reden van uitschrijving
        </td>
        <td>
            <?php
            echo $_GET["redenuit"];
            ?>
        </td>
    </tr>
    <tr>
        <td>
            Leerjaar
        </td>
        <td>
            <?php
            echo $_GET["Leerjaar"];
            ?>
        </td>
    </tr>
    <tr>
        <td>
            Aanmelden bij de succsesklas
        </td>
        <td>
            <?php
            if(isset($_GET["succlas"]))
            {
                echo "aanmelden voor klas";
            }
            else{
                echo "wel succesklas";
            }
            ?>
        </td>
    </tr>
    <tr>
        <td>
            Verwijderen gegevens
        </td>
        <td>
            <?php
            if(isset($_GET["versys"]))
            {
                echo "gegevens moeten verwijderd woorden";
            }
            else{
                echo "gegevens bewaaren";
            }
            ?>
        </td>
    </tr>
    <tr>
        <td>
            Reden van uitschrijving
        </td>
    </tr>
    <tr>
        <td>
<!--            empty  checken of hij word meegestuurd-->
<!--            isset  checken of hij word meegestuurd-->
            <?php
                echo $_GET["reden"]
            ?>
        </td>
    </tr>
</table>
