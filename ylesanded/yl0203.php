<?php
/*
Nele, 5. mai 2016

Ülesanne 0203

Lisa käsitsi massiivi kümne näitleja nime kasutades massiivi loomiseks array funktsiooni 
$stars = array('Clint', 'Bruce'); 
Väljasta see "for" tsükliga.
*/


$stars = array('Palmiste', 'Malmsten', 'Loog', 'Pohla','Haasma','Uuspõld','Reinsalu','Lunge','Aadli','Lass');


for($i=0; $i<sizeof($stars); $i++)
{
  echo "Masiivi element kohal $i on $stars[$i].<br>";
} 


?>