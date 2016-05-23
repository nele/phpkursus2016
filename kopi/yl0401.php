<?php

/* Nele, 23. mai 2016

Ülesanne 0401

Tee massiiv kuhu lisada järgmised andmed:
Nimi, aadress, pildi nimi (nt. vello.jpg), kodulehekülg (nt. www.onu.ee)
Pilt salvesta ülesande kataloogi.
Luua HTML lehekülg kuhu kuvada massiivist välja eelpool kirjeldatud andmed.
Nime kuvamiseks kasuta <b> tagi.
Aadressi kuvamiseks kasuta <i> tagi.
Pildi kuvamiseks kasuta <img src=> tagi.
Kodulehe lingi kuvamiseks kasuta <a href=> tagi.
*/

$array['name']="Nele";
$array['aadress']="Kristiine, Tallinn";
$array['picture']="pariis.jpg";
$array['url']="http://www.naris.ee";
 
 
echo '
<html>

<head>
<title>Ülesanne 0401</title>
</head>

<body>

<p>

Nimi on <b>' . $array['name'] . '</b>.<br>
Aadress on <i>' . $array['aadress'] . '</i>.<br>
<img src="' . $array['picture'] . '" alt="Array" height="206px" width="358px"><br>
<a href="' . $array['url'] . '">Link kodulehele</a>


<p>


</body>
</html>
';

?>