<?php
include "../include/header.php";
include "../include/aside.php";
?>
<main id="wrapper">
    <h2>
        opdracht 7.2
    </h2>
<?php
// Open de database connectie en ODBC driver
try {
    $pdo = new PDO("odbc:odbc2sqlserver");
} catch (PDOException $e) {
//    als de code hierboven niet is geluk voor hij dit uit.
    echo "<h1>Database error:</h1>";
    echo $e->getMessage();
    die();
}
// als de try is gelukt gaad hij hier veder.
echo "database connectie gelukt";

//stap 5 stap 2
// ik denk het wel omdat de echo database connectie gelukt staat.


// Uitvoeren van een SQl query
try {
    // Query schrijven
    $sql = 'SELECT * FROM dbo.joke';
    // Query uitvoerend
    $result = $pdo->query($sql);
} catch (PDOException $e) {
    echo 'Er is een probleem met ophalen van jokes: ' . $e->getMessage();
    exit();
}
// Lege Array aanmaken voor de results
$aJokes = array();
// Door de results heen loopen via een while
//fatche is gegevens is ophalen ui tde database
while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
    // Result wegschrijven in de $aJokes array
    $aJokes[] = $row;
}

?>

<!--    bovekant van tabel aanmaken-->
<table id="tOdrachtZevenPuntTwee">
    <tr>
        <th>
            ID
        </th>
        <th>
            Joketext
        </th>
        <th>
            Jokeclou
        </th>
        <th>
            Jokedate
        </th>
    </tr>
    <?php
    //onderkant van tabel word gemaakt en de juiste data word er automatisch in gezet.
    foreach ($aJokes as $inhoud)
    {
        echo "<tr><td>".$inhoud['id'] ."</td><td>".$inhoud['joketext'] ."</td><td>".$inhoud['jokeclou'] ."</td><td>".$inhoud['jokedate'] ."</td></tr>";
    }
    ?>
</table>
</main>



<?php
include "../include/footer.php";
?>
