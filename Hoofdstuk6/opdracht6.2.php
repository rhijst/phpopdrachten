<?php
include "../include/header.php";
include "../include/aside.php";
?>
<main id="wrapper" >
    <h2>
        hoofdstuk 6.1
    </h2>
<!--    /////////////////////////////-->
<!--    benodigde code-->
<!--    onchange="document.getElementById('gameFrm').submit();-->
<!--    heo moet ik plaatjes toevoegen? (toegang geweigerd geen machtigingen)-->
    <form id="gameFrm" method="get" action="opdracht62.php">
        <div class="float"><input type="radio"
                                  onchange="document.getElementById('gameFrm').submit();" name="keuze"
                                  value="steen"><img src="../images/steen.jpg"></div>
        <div class="float"><input type="radio"
                                  onchange="document.getElementById('gameFrm').submit();" name="keuze"
                                  value="papier"><img src="../images/papier.jpg"></div>
        <div class="float"><input type="radio"
                                  onchange="document.getElementById('gameFrm').submit();" name="keuze"
                                  value="schaar"><img src="../images/schaar.jpg"></div>
    </form>
</main>

<?php
    if (isset($_GET['keuze']))
    {
        echo "Jij koos: <img src='../images/{$_GET['keuze']}.jpg'>";
        //keuze computer?
    }


    //Wat kiest de computer
    //Random wordt er een getal tussen 0 en 2 gekozen
//    $keuzecomputer = rand(0,2); //nodig of niet?
    $opties = array("steen","papier","schaar");
    $computerkeuzegetal = rand(0,2);
    $computerkeuze = $opties[$computerkeuzegetal];
    echo "&nbsp;&nbsp;De computer koos: <img src='../images/{$computerkeuze}.jpg'>";


/*
 *spelregels
    * gelijke keuzes wint niemand
    * schaar wint van papier
    * schaar verliest van steen
    * steen wint van schaar
    * steen verliest van papier
    * papier wint van steen steen
    * papier verliest schaar
*/

?>


<?php
include "../include/footer.php"
?>