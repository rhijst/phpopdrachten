<?php
include "../include/header.php";
include "../include/aside.php";
include "Script.php"
?>
<main id="wrapper">
    <h2>Uitwerkingen</h2>
    <br><br><br>
    <?php
    echo "<h4>taak 2</h4><br>";
    echo "<h4>taak 3</h4>";
    echo  $task2 . rtrim($text, ", ") . "<br>";
    echo "<h4>taak 4</h4>";
    echo $task4;
    echo "<h4>taak 5</h4>";
    echo $task5;
    echo "<h4>taak 6</h4>";
    echo $task6;
    ?>
</main>
<?php
include "../include/footer.php"
?>
