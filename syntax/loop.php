 <?php  

$rand=rand(1,200);
for ($i=0; $i<200 ;$i++)
{
    echo "o ";
    if ($i==$rand) echo"c ";
    }




for ($i=0; $i<100 ;$i++)
{
    echo "$i ";
    }


for($i = 1; $i < 10; $i++)
{
  echo $i;
}
echo "<br>";

for ($i = -10; $i <= 10; $i++)
{
    echo "$i, ";
}
echo "<br>";

echo "<table border=1>";
for ($i = 1; $i <= 10; $i++)
{
    echo "<tr>";
    
    for ($j = 1; $j <= 10; $j++)
    {
        echo "<td>$i,$j</td>";
    }
    
    echo "</tr>";
}
echo "</table>";


for ($i = 1; $i <= 3; $i++)
{
    for ($j = 3; $j > 0; $j--)
    {
        echo "$i,$j<br>";
    }
}
echo "<br>";


for ($i = 1; $i <= 3; $i++)
{
  for ($j = 1; $j <= 3; $j++)
  {
    $val = $i * $j;
    echo "$i x $j = $val<br>";
  }
}
echo "<br>";


for ($i = 1; $i < 15; $i = $i + 3)
{
  echo "$i. juhuslik nr. ";
  echo rand(1,100);
  echo "<br>";
}
echo "<br>";


  echo "<center>";
  for ($i = 1; $i < 20; $i++)
  {
    for ($j = 1; $j <= $i; $j++)
    {
      $rnd = rand(1, 15);

      switch ($rnd)
      {
        case 1:
          echo "<span style='color: red'>";
          break;
        case 2:
          echo "<span style='color: yellow'>";
          break;
        default:
          echo "<span style='color: green'>";
          break;
      }      
      echo "**";
      echo "</span>";
    }
    echo "<br>";
  }
  echo "<span style='color: brown'>";
  echo "****<br>";
  echo "****<br>";
  echo "****<br>";
  
  
  # fish in sea
  echo "<center>";
  for ($i = 1; $i < 20; $i++)
  {
    for ($j = 1; $j < 40; $j++)
    {
      $rnd = rand(1, 300);
      $foo = "**";
      
      switch ($rnd)
      {
        case 1:
          echo "<span style='color: gray'>";
          $foo = "-]D";
          break;
        case 2:
          echo "<span style='color: brown'>";
          $foo = "-=D";
          break;
       case 3:
          echo "<span style='color: green'>";
          $foo = ">-D";
          break;          
        default:
          echo "<span style='color: blue'>";
          break;
      }      
      echo $foo;
      echo "</span>";
    }
    echo "<br>";
  }

  


?> 