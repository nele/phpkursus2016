<?php
/* 
Nele, 5. mai 2016
Ülesanne 0202

Lisa käsitsi massiivi 10 looma nime kasutades massiivi kohanäitu. Nt. $animals[0]="karu" jne.
Väljasta see "foreach" tsükkliga.
*/

$animals[0]="delfiin";
$animals[1]="panda";
$animals[2]="kaelkirjak";
$animals[3]="punane panda";
$animals[4]="ninasarvik";
$animals[5]="koer";
$animals[6]="lõvi";
$animals[7]="tiiger";
$animals[8]="elevant";
$animals[9]="gepard";

foreach ($animals as $key => $val)
{
  echo "Massiivi võtme $key, väärtus on $val.<br>";
} 


?>