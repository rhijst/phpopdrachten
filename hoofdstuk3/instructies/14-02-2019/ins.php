<?php
include "../include/header.php";
include "../include/aside.php";
?>
<main id="wrapper">
    <h2>Uitwerkingen</h2>
    <p>
        tekst <span> ICT`ers </span>f ewfewf  fewfef ewfwe f<span>fdwew </span>
    </p>
    <?php
        $profession = "ICT`ers";//string
        $year = 2019; //interger
        $percent = 17.1; //float
        $subjects = array("internet", "computers", "software");//Array
        $skills = False; //boolean

        echo $profession;

        // kijken wat voor waarde er in een var staat
        //var_dump($profession);

        echo "$profession $year in jaar";
    echo "tekst" . $year;
    ?>
</main>
</body>
</html>
