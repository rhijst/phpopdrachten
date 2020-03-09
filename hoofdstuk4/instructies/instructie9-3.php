<?php
include "../../include/header.php";
include "../../include/aside.php";
?>
<main id="wrapper">
    <h2>Uitwerkingen</h2>
    <?php
    $text = "";
    $counter = 0;
    while ($counter <= 10)
    {
        $counter++;
//        $text .= "hoi" . $counter . "<br>";
        $text = $text . "hoi" . $counter . "<br>";
    }
    echo $text;

    for ($teller = 0; $teller <= 10; $teller++)
    {
        echo "wat" .$teller . "<br>";
    }
    ?>

</main>
<?php
include "../../include/footer.php"
?>
