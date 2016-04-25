 <?php 
//Palgal on väärtus.



    $palk = 10000; 
     
    if ($palk != "") 
    { 
        echo "Sa saad palka 1!<br>"; 
    } 
     
     #veel 1 variant
         if ($palk) 
    { 
        echo "Sa saad palka ja punkt!<br>"; 
    } 
//Palgal pole väärtust.
    $palk = ""; 
     
    if ($palk != "") 
    { 
        echo "Sa saad palka 2!<br>"; 
    } 
    
//NB! Huvitav moment. Palgal on väärtuseks tühik.
    $palk = " "; 
     
    if ($palk != "") 
    { 
        echo "Sa saad palka 3!<br>"; 
    } 
     
?> 