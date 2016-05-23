
<?php
/*
Nele, 13. mai 2016

Ülesanne 0305

Teha funktsioon nimega "string_info". Funktsiooni sisendargumendiks olgu teksti string ($string). Funktsioon üleb:

1. Mis on selle stringi esimene täht ja viimane täht. Funktsioon "strlen" leiab stringi pikkuse ja "echo $string[0]" kuvab esimese tähe.
2. Mitu tähte stringis on (strlen).
3. Kogu string tehaks läbiva väiketähega (strtolower) ja väljastatakse.
4. Kogu string tehaks läbiva suurtähega (strtoupper) ja väljastatakse.
5.
 Tsükliga loetakse kokku ja kuvatakse ekraanile mitu "a" tähte stringis esineb.
*/

function string_info($str) 
{
  
  echo "Stringi esimene täht on: ".$str[0].". ";
  
  echo "<br>Stringis ".$str. " on ".strlen($str)." tähte. ";

  echo  "<br>Antud string väikeste tähtedega on järgmine ".strtolower($str).".";
  echo  "<br>Antud string suurte tähtedega on järgmine ".strtoupper($str).".";
 $arv=0;
    for ($i=0; $i < strlen($str); $i++ ){
    

        if ($str[$i]=='a') { 
        $arv=$arv+1;
    
        } 
  
  
    } 
  echo  "<br>Stringis ".$str. " on a tähti ".$arv."."; 
}

string_info("Phpkursus2016");

?>
