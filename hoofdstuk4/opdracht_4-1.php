<?php
include "../include/header.php";
include "../include/aside.php";
?>
<main id="wrapper">
    <h2>Uitwerkingen</h2>
</main>
<?php
$date = date('H');

if ($date <= 05)
{
    echo "goedenacht";
}
elseif ( $date > 5 && $date <= 12)
{
    echo "Goedenochtend";
}
elseif ( $date > 12 && $date <= 17)
{
    echo "Goedenmiddag";
}
elseif ( $date > 17 && $date <= 24)
{
    echo "Goedenavond";
}
include "../include/footer.php"
?>

