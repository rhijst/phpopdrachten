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
            echo $_GET["succlas"];
            ?>
        </td>
    </tr>
    <tr>
        <td>
            Verwijderen gegevens
        </td>
        <td>
            <?php
            if($_GET["versys"]=="ja")
            {
            echo "verwijderen gegevens";
            }
            else
            {
                echo "Gegevens hoeven niet te wordenvverwijderd";
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
            <?php
            if(isset($_GET['versys']) &&
                $_GET['versys'] == 'Yes')
            {
                echo "Need wheelchair access.";
            }
            else
            {
                echo "Do not Need wheelchair access.";
            }
            ?>
        </td>
    </tr>
</table>
