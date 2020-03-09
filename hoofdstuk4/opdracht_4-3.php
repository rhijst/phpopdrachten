<?php
include "../include/header.php";
include "../include/aside.php";
include "Script.php"
?>
<main id="wrapper">
    <h2>Uitwerkingen</h2>
    <br><br><br>
    <?php
    echo $task2;
    //echo $text;
    echo rtrim($text, ",");
    echo rtrim($text2, ",");
    ?>
</main>
<?php
include "../include/footer.php"
?>
