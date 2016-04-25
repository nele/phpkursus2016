 <?php  

$menu_id = $_GET['menu_id'];


// aadressireale kirjutada http://localhost/syntax/case.php?menu_id=1


switch ($menu_id)
{
  case 1:
    echo "Esileht";
    break; //kui siin break ära jätta, siis kui käiviutb 1 käivitub ka 2
  case 2:
    echo "Tutvustus";
    break;
  case 3:
    echo "Tooted";
    break;
  case 4:
    echo "Kontakt";
    break;
  default:
    echo "Error 404";
    break;
}
echo "<br>";


/*
$nr = 133;

switch ($nr)
{
  case 111:
    echo "Buss 111";
    break;
    
  case 122:
    echo "Buss 122";
    break;
    
  default:
    echo "Sellist bussi pole. Mine trammiga.";
}
echo "<br>";


//break puudub
$day = "E";

switch ($day)
{
  case "E":
    echo "Sinine esmaspäev<br>";
    
  case "T":
    echo "Punane teispäev<br>";
}
echo "<br>";
*/

?> 