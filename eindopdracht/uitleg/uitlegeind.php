<?php
//numerieke arry == cijfers en gatale
//associative Array and foreach


//associative Array met indexe veranderd
//als eerste key word dan de waarde
//apple is de index cijfer vervanger!
$fruit = array("apple" => "red","orange"=> "oranje","banana" => "yellow");

// andere manier ofzo
$fruit["blueberry"] = "blue";
//zet op de pagina apple
//echo $fruit["apple"];

//foreach

foreach($fruit as $key => $value)
{
    echo $key . " heeft de kleur ". $value ."<br>";
}


print_r($fruit);