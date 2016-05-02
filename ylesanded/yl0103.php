<?php
/*nele, 2. mai 2016
Ülesanne 0103
Järgnevas ülesandes tohib kasutada vaid IF tingimust, mooduli võtmist (mod %) ja FOR tsükklit. Kuvada ühe FOR tsükkliga välja järgmine arvude jada järgmisel kujul: 
100
200
300
400
500
600
700
800
900
1000
*/
for($i=100;$i<1100;$i=$i+1){
	if ($i % 100 == 00){
		echo "$i <br>";
	}
}
?>
