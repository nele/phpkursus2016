 <?php 

//Omistamist ei toimu. $a ei saa $b väärtust.

    $a = 2; 
    $b = 4; 
      
    if ($a == $b) { 
            Echo "Ei ole võrdsed<br>"; 
    } 

?>

<?php

//Omistamine toimub. $a saab $b väärtuse.

    $a = 2; 
    $b = 4; 
     
    #omistamine 
    $a = $b; 
        
    if ($a == $b) { 
            Echo "On võrdsed<br>"; 
    } 

?>

<?php 

//NB! Huvitav moment. Omistamist ei toimu. $a ei saa $b väärtust. 
//Aga tingimus on vigne. Võrduse kontrollil on 2 võrdusmärki, omistamisel 1. 
//Praegu tehaksegi tingimuse sees omistamine.

    $a = 2; 
    $b = 4; 
        
    if ($a = $b) { 
            Echo "Ei ole võrdsed aga IF sees toimub omistamine<br>"; 
    } 

?> 