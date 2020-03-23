<?php

//dag maan jaar van morgen vorige instrucite
//echo date("d-m-Y", strtotime("+1 days"));
?>
<form action="form_data.php" method="get">
    <label for="firstname">Voornaam</label> <input type="text" name="firstname" id="firstname">
    <label for="lastname">Voornaam</label> <input type="text" name="lastname" id="lastname">
    <input type="submit">
    <select name="subject">
        <option value="php">PHP</option>
        <option value="js">JavaScript</option>
    </select>
</form>

