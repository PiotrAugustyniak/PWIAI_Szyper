<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <style media="screen">
      table, tr,td {
        border: 1px solid black;
        border-collapse: collapse;
        text-align: center;

      }
      td{
        padding: 10px;
      }
      .kolored{
        background-color: red;
      }  .kolorblue{
          background-color: blue;
        }
    </style>
    <meta charset="utf-8">

  </head>
  <body>
    <table>
<?php
$i=1;
$kolorowaczred = 1;
$kolorowaczblue = 10;
$sumared = 0;
$sumablue = 0;
do{
echo "<tr>";
$j=1;
do{
  $suma = $i*$j;
  if($kolorowaczred == $j){
    echo '<td class="kolored">'.$suma."</td>";
    $sumared +=$suma;
  }else if($kolorowaczblue==$j){
    echo '<td class="kolorblue">'.$suma."</td>";
      $sumablue +=$suma;
  }
  else{
      echo "<td>$suma</td>";
  }

  $j++;
}while($j<=10);

$i++;
$kolorowaczred++;
$kolorowaczblue--;
echo "</tr>";
}while($i<=10);
 ?>
</table>


<?php
$sumall = $sumared+$sumablue;
echo "suma red: $sumared <br>";
echo "suma blue: $sumablue <br>";
echo "suma all line: $sumall <br>";
 ?>
  </body>
</html>
