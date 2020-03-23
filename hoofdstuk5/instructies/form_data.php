<?php

// Instructie formulieren versturen met GET
print_r($_GET);
echo $_GET["firstname"];
echo $_GET["lastname"];
if($_GET["subject"]=="php")
{
    echo "hier staat eens tukje tekst over php";
}
?>


