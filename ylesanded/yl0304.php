
<?php
/*
Nele, 13. mai 2016

Ülesanne 0304

Kasutades arikmeetilist tehet moodul teha funktsioon nimega "number_info", mille sisendargumendiks on täisarv ja mis: 

1. Teatab kasutajale kas tegu on paaris või paaritu arvuga.
	Mooduli näide:
	12%2=0
	13%2=1
	14%2=0
2. Teatab kasutajale kas arv on suurem või väiksem kui 10.
3. Teatab kasutajale kas arv on suurem või väiksem kui 100.
4. Näitab kasutajale arvu ruudus.
5. Näitab kasutajale arvust ruutjuurt.

Käivita funktsioon 5 korda sisestades arvudeks: 1, 8, 9, 15, 200
*/


function number_info($num) 
{
  
  echo "<br>Arv on: ".$num. ".";  
  if ($num%2==0)
       { 
    echo " Tegu on täisarvuga. ";
  }      
      
    elseif ($num%2==1)
       { 
    echo " Tegu ei ole täisarvuga. ";
  } 
  
  if ($num<10)
       {
    echo " See arv on väiksem kui 10.";
    } 
    elseif ($num>10)
       { 
    echo " See on arv on suurem kui 10.";
  } 
    if ($num<100)
       {
    echo " See arv on väiksem kui 100.";
    } 
    elseif ($num>100)
       { 
    echo " See on arv on suurem kui 100.";
  } 
  echo " Antud arv ruudus on ".($num*$num).".";
  echo " Ruutjuur antud arvust on ".round(pow($num, 1/2),3).".";
}
number_info(1);
number_info(8);
number_info(9);
number_info(15);
number_info(200);

?>
