<?php
// Open de database connectie en ODBC driver
try
{
    $pdo = new PDO("odbc:odbc2sqlserver");
}
catch (PDOException $e)
{
    echo "<h1>Database error:</h1>";
    echo $e->getMessage();
    die();
}
echo "database connectie gelukt";

//stap 5 stap 2
// ik denk het wel omdat de echo database connectie gelukt staat.


// Uitvoeren van een SQl query
try
{
    // Query schrijven
    $sql = 'SELECT * FROM dbo.joke';
    // Query uitvoerend
    $result = $pdo->query($sql);
}
catch (PDOException $e)
{
    echo 'Er is een probleem met ophalen van jokes: ' . $e->getMessage();
    exit();
}
// Lege Array aanmaken voor de results
$aJokes = array();
// Door de results heen loopen via een while
while ($row = $result->fetch(PDO::FETCH_ASSOC))
{
    // Result wegschrijven in de $aJokes array
    $aJokes[] = $row;
}

///////////////////////////////////////////////////////////////
///een <br> tussen zetten voor leesbaarheid.
    echo "<br>";
/// ///////////////////////////////////////////////////////////
// Tonen van de inhoud van aJokes
var_dump($aJokes);



// stap 6
//Note een staat denk ik een foutje in stap 6 stap 1 onder het script van stap 4.
// jokes toonen
echo"<br>";
print_r($aJokes);
echo"<br>";
//echo $aJokes;

//ik weet niet of het goed gegaan is