<?php
/*
 * Instructie date() en elseif statement
 */
    date_default_timezone_set("Europe/Amsterdam");
 echo date("d-m- H:i");
 echo $month = date("m");

 if ($month == '03')
 {
     echo "Het is vandaag lente";
 }
 elseif( $month >= 6)
 {
     echo "het is zomer";
 }