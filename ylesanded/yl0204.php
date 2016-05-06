<?php
/*
Nele, 5. mai 2016
 
Ülesanne 0204

Lisa massiivi inimese isikuandmed (nimi, vanus jne.) min 5 elementi.
Väljasta need mõnes lauses, sellesama inimese kohta.
Nt. "Kodanik [nimi] on [vanus] aastane"

*/



$human[1]["nimi"] = "Nele";
$human[1]["vanus"]= "25";
$human[1]["linn"] = "Tallinn";
$human[1]["elukoht"] = "Lilleküla";
$human[1]["firma"]= "tarkvaraarendus";
$human[1]["staaž"]= "3";

print_r($human);

echo "<br>";
echo "<br>";
echo "Minu nimi on ". $human[1]["nimi"] .".<br>"."Ma elan linnas nimega ".$human[1]["linn"].", asumis nimega ".$human[1]["elukoht"].
"<br>"."Ma olen ".$human[1]["vanus"]."-aastane."."<br>".
"Valdkond, kus ma töötan, on ".$human[1]["firma"]."<br>"."Mu üldine tööstaaž on ". $human[1]["staaž"]." aastat.";

?>