<?php 

$menu_id = 2; 

switch ($menu_id = 'default') 
{ 
  case 'default': 
    echo "Esileht "; 
  case 2: 
    echo "Tutvustus "; 
    break; 
  default: 
    echo "Kontakt "; 
} 

?>