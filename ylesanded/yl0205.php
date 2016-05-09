<?php
/*
Nele, 6. mai 2015
 
Ülesanne 0205


Sisesta käsitsi 3x3 kahemõõtmeline massiiv. Massiivi elementideks sisesta filmide nimed.
Nt.
$movies[1][1] = 'Matrix';
$movies[1][2] = 'Titanic';
jne.
Väljasta see massiiv tsüklitega.
*/


$movies[1][1] = '1944';
$movies[1][2] = 'Klassikokkutulek';
$movies[1][3] = 'Mandariinid';
$movies[2][1] = 'Jan Uuspõld läheb Tartusse';
$movies[2][2] = 'Kertu';
$movies[2][3] = 'Deemonid';
$movies[3][1] = 'Vehkleja';
$movies[3][2] = 'Nullpunkt';
$movies[3][3] = 'Päevad, mis ajasid segadusse';




echo "<table border=1>";
for ($i=1; $i<4; $i++)
{ 
  echo "<tr>";
  for ($j=1; $j<4; $j++)
  {
    $mas[$i][$j] = $movies[$i][$j];
    

    echo "<td>".$mas[$i][$j]."</td>";
  }
  echo "</tr>";
} 

echo "</table>";


echo "<br>";
echo "<b>Veel üks kord sama asi</b>";
echo "<br>";
echo "<br>";

for ($i=1; $i<4; $i++)
{ 
  
  for ($j=1; $j<4; $j++)
  {
      echo $mas[$i][$j]."<br>";
  }
 
} 


?>