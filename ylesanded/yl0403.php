<?php
header('Content-Type: text/html; charset=utf-8');

/* Nele, 23. mai 2016



Ülesanne 0403

Lisa massiivi 15 HTML erinevat värvi.
Leia ilusaid värvi nimed siit: http://www.w3schools.com/colors/colors_names.asp
Kuva tsükliga välja värvuste nimed ja värvi need sama värvi nt. 
<span style='color: cyan'>cyan - sinine taevas</span>

*/


$colors[0]="Blue";
$colors[1]="BlueViolet";
$colors[2]="Red";
$colors[3]="Coral";
$colors[4]="Chocolate";
$colors[5]="Cyan";
$colors[6]="DarkOrange";
$colors[7]="DarkOrchid";
$colors[8]="DeepSkyBlue";
$colors[9]="Gold";
$colors[10]="GoldenRod";
$colors[11]="Orchid";
$colors[12]="MidnightBlue";
$colors[13]="LightCoral";
$colors[14]="Maroon";



for($i=0; $i<sizeof($colors); $i++)
{
  echo ($i+1) . '. <span style="color:'  . $colors[$i] . '" >' . $colors[$i] . '</span><br />';
} 


?>
