<?php

/*
Ülesanne 0301

Luua massiivi nimega "$mas" elementidega Karu, Jänes, Hunt, Rebane, Hirv, Hiir, Põder, Ahv, Mäger, Mutt.
Karu massiivi elemendi indeks olgu 0, Jänesel 1 jne.

Teha funktsioon nimega "kuva_massiiv". Funktsiooni sisendargumendiks 
 * olgu massiiv mida soovime välja kuvada. Funktsiooni sees lugeda 
 * funktsiooniga "sizeof" elemendid kokku ja väljastada tsükliga kõik masiivi elemendid üksteise alla. Kuvatud elemendi ette panna ka massiivi elemendi number. Kuvamisel panna kõige lõppu panna paragrafi tag "<p>".

Näide:
0. Karu
1. Jänes
2. Hunt
jne.
*/

echo "<br>";
echo "<br>";
echo "Ülesanne 0301.<br>";
echo "<br>";

$mas=array("Karu", "Jänes", "Hunt", "Rebane", "Hirv", "Hiir", "Põder", "Ahv", "Mäger", "Mutt");

function kuva_massiiv($array)
{
  print_r($array);
  echo "<br>";
  for ($i=0; $i < sizeof($array); $i++ ){
    
    echo  $i.". ". $array[$i]."<br>"; 
  } 
}

kuva_massiiv($mas);

/*
Ülesanne 0302
 
Jätkata eelmist ülesannet. 

Tee funktsioon nimega "vaheta_elemendid". 
 
Funktsiooni sisendargumendiks olgu kaks massiivi elemendi numbrit, mille kohtasid massiivis soovime vahetada ja massiiv ise. Vahetamiseks tuleb kasutada funktsioonisisest lisamuutujat. Vahetada elementide "3. Rebane" ja "7. Ahv" massiivi kohad. Tagasta massiiv põhiprogrammile. Kuvada "kuva_massiiv" funktsiooniga massiiv välja.

Näide: 
Rebane jääb nr. 7-ks
Ahv jääb nr. 3-ks
*/

echo "<br>";
echo "<br>";
echo "Ülesanne 0302.<br>";
echo "<br>";

function vaheta_elemendid($e1, $e2, $mas)  {

    $ajutine = $mas[$e1];
    $mas[$e1] = $mas[$e2];
    $mas[$e2] = $ajutine;

    return $mas;

}

$loomad = vaheta_elemendid(3, 7, $mas);

echo "<br>";
echo "<br>";
kuva_massiiv($loomad);
/*
Ülesanne 0303

Jätkata eelmist ülesannet. 

Teha funktsioon nimega "kustuta_element". 
 
Funktsiooni sisendargumendiks olgu massiivi elemendi nr. mille väärtust soovime kustutada 
ja massiiv ise. Kustutatud elemendist järgmised liikugu ühe koha võrra ettepoole. 
 
Kustuta massiivi viimane tühi element funktsiooniga unset($mas[key]). 
  
Tagasta massiiv põhiprogrammile. 

Kustuta funktsiooniga element nr. 1 "Jänes". Kuvada "kuva_massiiv" funktsiooniga massiiv välja.

Näide:
Oli 0. Karu, 1. Jänes, 2. Hunt jne.
Peale kustutamist olgu 0. Karu, 1. Hunt jne.


echo "<br>";
echo "Ainult kustutab elemendi...<br>";
echo "<br>";

function kustutaelement($number,$array)
{
#print_r($array);
  
  for ($i=0; $i < sizeof($array); $i++ ){
    
      if ($number==$i){
          
          unset($array[$number]);
          
          }
    echo  $i.". ". $array[$i]."<br>"; 
 }
print_r($array);
  
}

kustutaelement(1,$mas);
 
*/

#Enamvähem õige asi.

echo "<br>";
echo "<br>";
echo "Ülesanne 0303.<br>";
echo "<br>";


function kustuta_element($number,$array)
{
#print_r($array);
  
  for ($i=0; $i < sizeof($array); $i++ ){
    if ($number>$i){
      echo  $i.". ". $array[$i]."<br>"; 
        
       }
      elseif ($i>$number) {
        echo  ($i-1).".".vaheta_elemendid($i, ($i-1), $array)[$i]."<br>"; 
    }
    
 }
  
}

kustuta_element(2,$mas);


/*

($array[sizeof($array)-1]){
          
          unset($array[sizeof($array)-1]);

*/

?>
