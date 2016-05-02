<?php


function getname($name)
{
    $names ="Koer    123;
kass    2837423
kukk    83274
kana 428384";
    
    $rows = explode("\n",$names);
    
  //  print_r($rows);
    
    
    
    foreach($rows as $key => $val)
    {
        $temp = explode("    ", $val);
        $surname[$temp[0]] = $temp[1];
         } 
    print_r($surname);

    
    return $count;
    
}

#Funktsioon niisama ei käivitu. Peame funktsiooni esile kutsuma.

getname("koer");

?>
