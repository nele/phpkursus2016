<?php
header('Content-Type: text/html; charset=utf-8');
/*
Nele, 23. mai 2016

Ülesanne 0404
Tee vorm <form> tagiga kangelase andmete sisestamiseks. Pange kogu vorm ka tabelisse. Paigutage lahtrite kirjelduse esimesse veergu ja lahtrid teise veergu. Nagu on näidatud siin. http://students.tmk.edu.ee/php/materjal/php_database.php#Sisestusvorm
Nimi (<input type=text>)
Klass (<select>, <options>)
Rass (<select>, <options>)
Sugu (<input type=radio>)
Lemmikloom kaasas (<input type=checkbox>)
Kirjeldus (<textarea></textarea>)
Submit nupp <input type=submit>
Vorm kinni.
*/

echo '
<html> 
<head> 
<title>Kangelase andmed</title> 
</head> 
<body>

<form method="post">


<table border="1" cellpadding="2px"> 
	<tr> 
  		<td>Nimi:</td> 
  		<td><input type="text" name="name" value="Sisesta kangelase nimi"style="width:200px"></td> 
	</tr> 
	<tr> 
  		<td>Klass:</td> 
 		<td><select name="class" style="width:200px"> 
  			<option></option> 
 			<option>Klassikaline kangelane</option> 
  			<option>Superkangelane</option> 
  			<option>Eepiline kangelane</option> 
  			<option>Antikangelane</option> 
 			</select></td> 
	</tr> 
	<tr> 
  		<td>Rass:</td> 
  		<td><select name="race" style="width:200px"> 
  			<option></option> 
 			<option>Valge</option> 
  			<option>Must</option> 
			<option>Kollane</option>
 			</select></td>
	</tr> 
	<tr> 
  		<td>Sugu:</td> 
  		<td><input type="radio" name="gender" value="female">Naine
			<input type="radio" name="gender" value="male">Mees</td> 
	</tr> 
	<tr> 
  		<td>Lemmikloom kaasas:</td> 
  		<td><input type="checkbox" name="dog">Delfiin<br />
			<input type="checkbox" name="horse">Panda<br />
			<input type="checkbox" name="eagle">Rai<br />
			<input type="checkbox" name="rat">Punane panda</td> 
	</tr> 
	<tr> 
  		<td>Kirjeldus:</td> 
 		<td><textarea name="description" cols="24" rows="8">Kirjelda oma kangelast</textarea></td> 
	</tr> 
</table> 
<input type="submit" name="submit" value="Loo oma kangelane"> 

</form> 
</body> 
</html>
';
?>