<?php
include "../include/header.php";
include "../include/aside.php";
?>
<main id="wrapper">
    <h2>Uitwerkingen</h2>
    <h1>
        uitschrijfformulier KW1C
    </h1>
    <hr>
    <form action="uitschrijving.php" method="GET">
        <table>
            <tr>
                <td>
                    <label for="fulName"> Voor en achternaam</label>
                </td>
                <td>
                    <input type="text" name="fulName" id="fulName">
                </td>
            </tr>
            <tr>
                <td>
                   <label for="studentnumber">Studentennummer</label>
                </td>
                <td>
                    <input id="studentnumber" name="studenetnumer" type="number">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="dateout">Datum van uitschrijving</label>
                </td>
                <td>
                    <input type="date" id="dateout" name="dateout">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="redenuit"> Reden van uitschrijving</label>
                </td>
                <td>
                    <select id="redenuit" name="redenuit">
                        <option value="teveelhuiswerk">Veel te veel huiswerk.</option>
                        <option value="docenten">De docenten zijn het probleem</option>
                        <option value="saai">saai</option>
                        <option value="verkeerde-keuze">verkeerde keuze</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                </td>
            </tr>
            <tr>
                <td rowspan="3">
                    Leerjaar
                </td>
                <td>
                    <input type="radio" name="Leerjaar" value="Radio 1">1e leerjaar

                </td>
            </tr>
            <tr>
                <td>
                    <input type="radio" name="Leerjaar" value="Radio 2">2e leerjaar
                </td>
            </tr>
            <tr>
                <td>
                    <input type="radio" name="Leerjaar" value="Radio 3">3e leerjaar
                </td>
            </tr>
            <tr>
                <td>
                    <input id="succlas" name="succlas" type="checkbox">
                    <label for="succlas"> Ik wil me aanmelden bij de succesklas</label>
                </td>
            </tr>
            <tr>
                <td>
                    <input id="versys" name="versys" value="ja" type="checkbox" >
                    <label for="versys">Verwijder mijn gegevens uit het systeem</label>
                </td>
            </tr>
            <tr>
                <td>
                <label for="reden"> Geef hieronde de reden van je uitschrijving op</label>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="text" id="reden" name="reden">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit">
                </td>
            </tr>
        </table>
    </form>
</main>
<?php
include "../include/footer.php"
?>
