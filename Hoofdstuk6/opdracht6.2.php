<?php
include "../include/header.php";
include "../include/aside.php";
//Session_start();
if(!isset($_SESSION['user1']))
{
    $_SESSION['user1'] = 0;
    $_SESSION['user2'] = 0;
}
if(!isset($_GET['keuze']))
{
    $_GET['keuze'] = "";
}
//checken voor 5 destroy
//

?>
<main id="wrapper" >
    <h2>
        hoofdstuk 6.1
    </h2>

<!--    ik weet niet of dit mocht of niet. maar ik kreeg het er niet uit en ik snap ook niet waarom hij dit doet.-->
    <h3>
        Let op:
    </h3>
    <h4>
        De punten woorden pas bij gewerkt als je opnieuw klikt.
    </h4>
    <form id="gameFrm" method="get" action="opdracht6.2.php" onchange="document.getElementById('gameFrm').submit()">
        <div class="float">
            <input type="radio" onchange="document.getElementById('gameFrm').submit();" name="keuze" value="steen">
            <img class="StPaSc" src="opdracht6.2/steen.PNG">
        </div>
        <div class="float">
            <input type="radio" onchange="document.getElementById('gameFrm').submit();" name="keuze" value="papier">
            <img class="StPaSc" src="opdracht6.2/papier.PNG">
        </div>
        <div class="float">
            <input type="radio" onchange="document.getElementById('gameFrm').submit();" name="keuze" value="schaar">
            <img class="StPaSc" src="opdracht6.2/schaar.PNG">
        </div>
        <div>
            <table>
                <tr>
                    <td>
                        <?php
                            echo "jouw aantal punten " . $_SESSION['user1'] ;
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <?php
                        echo "de punten van de computer " . $_SESSION['user2'];
                        ?>
                    </td>
                </tr>
            </table>
        </div>
    </form>
    <?php
    if (isset($_GET['keuze']))
    {
        echo "Jij koos: <img class='StPaSc' src='opdracht6.2/{$_GET['keuze']}.PNG'>";
        //keuze computer?
    }


    //Wat kiest de computer
    //Random wordt er een getal tussen 0 en 2 gekozen
    $opties = array("steen","papier","schaar");
    $computerkeuzegetal = rand(0,2);
    $computerkeuze = $opties[$computerkeuzegetal];
    echo "&nbsp;&nbsp;De computer koos: <img class='StPaSc' src='opdracht6.2/{$computerkeuze}.PNG'>";

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
        //kijken wie er gewonnen heeft
        if (($_GET['keuze'])=="steen" && $computerkeuze == "schaar"||
            ($_GET['keuze'])=="papier" && $computerkeuze == "steen"||
            ($_GET['keuze'])=="schaar" && $computerkeuze == "papier")
        {;
            $_SESSION['user1'] +=1;
        }
        elseif(($_GET['keuze'])=="steen" && $computerkeuze == "papier"||
            ($_GET['keuze'])=="papier" && $computerkeuze == "schaar"||
            ($_GET['keuze'])=="schaar" && $computerkeuze == "steen")
        {
            $_SESSION['user2'] +=1;
        }
        elseif(($_GET['keuze'])=="steen" && $computerkeuze == "steen"||
            ($_GET['keuze'])=="papier" && $computerkeuze == "papier"||
            ($_GET['keuze'])=="schaar" && $computerkeuze == "schaar")
        {
            $_SESSION['user1'] +=0;
            $_SESSION['user2'] +=0;
        }


        //opnieuw laaten beginnen als iemand heeft gewonnen.
        if($_SESSION['user1'] == 5)
        {
            session_destroy();
            echo "<br><br>je hebt 5 punten dus gewonnen het spel start opnieuw als je een nieuwe keuze maakt.";
        }
        elseif($_SESSION['user2'] == 5)
        {
            session_destroy();
            echo "<br><br> de computer heeft 5 punten het spel start opnieuw als je een nieuwe keuze maakt.";
        }

    ?>
</main>




<?php
include "../include/footer.php"
?>