<?php
include "../include/header.php";
include "../include/aside.php";
?>
<main id="wrapper">
    <h2>
        hoofdstuk 6.1
    </h2>
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
include "../include/footer.php"
?>