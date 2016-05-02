<?php

$drinks[]="piim";
$drinks[]="kohv";
$drinks[]="mahl";
$drinks[]="Coca-Cola";
$drinks[]="energiajook";


echo $drinks[0];

echo"<br>";
echo"<br>";
print_r($drinks);


$rand1 = rand(0, sizeof($drinks)-1);
$rand2 = rand(0, sizeof($drinks)-1);

echo "<br>";
echo "<br>";
echo "Isa lemmikjook on $drinks[$rand1].";

echo "<br>";
echo "<br>";
echo "Minu lemmikjook on $drinks[$rand2].";

echo "<hr>";
echo "<br>";
echo "<br>";

echo "<ul>";
for ($i = 0; $i <= sizeof($drinks)-1; $i++)
{
    echo "<li>$drinks[$i] ";
    echo "- " . rand(2,8) . " eurot";
    echo "</li>";
}
echo "</ul>";


foreach ($drinks as $key => $val)
{
 $counter++;
 echo "$counter) Massiivi element indeksiga $key väärtus on $val<br>";
    
   
}


?>
