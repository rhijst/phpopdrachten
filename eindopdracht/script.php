<?php
$ShowScreenLog = true;
$message = "";
$login = array("docent" => "TocenD");//1
$login["student" ]= "ttudens";//2
$login["gebruiker"] = "rebruikeg";//3
$login["tijger"] = "rijget";//4
$login["aap"] = "paa";//5
$login["Donald Duck"] = "Donald Kucd";//6
$login["Dagobert"] = "Tagoberd";//7
$login["T-Dog"] = "G-Dot";//8
$login["Kwik"] = "Kwik";//9
$login["Maroon"] = "Naroom";//10
$login["1"] = "1";//11
//print_r($login);


// controleren of het ww goed is
if (isset($_GET["submit"]))
{
    foreach ($login as $key => $value)
    {
        if ($_GET["username"] == $key && $_GET["password"] == $value ||$_GET["username"] == NULL ||$_GET["password"] == NULL )
        {
            //iets uitvoeren als de gegevens goed zijn ingevuld.
            $ShowScreenLog = false;

        }
    }
}
