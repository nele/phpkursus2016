<?php
/*nele, 2. mai 2016
Ülesanne 0102
Järgnevas ülesandes tohib kasutada vaid IF tingimust ja FOR tsükklit. Kuvada ühe FOR tsükkliga välja järgmine arvude jada järgmisel kujul: 
-11
-10
-9
-8
-7
-6
-5
-4
-3
3
4
5
6
7
8
9
10
*/
for ($i=-11;$i<11;$i=$i+1){
  if ($i<-2){ 
    echo "$i"."<br>";
  }
  if ($i>2){ 
    echo "$i"."<br>";
  }
}
?>
