<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="./css/style.css">
  </head>
  <body>
<?php
require_once('./scripts/connect.php]');
$sql = "SELECT * FROM `user`";
$result = mysqli_query($conn,$sql);

echo <<<TABLE
<table>
<tr>
<th>Imię</th>
<th>Nazwisko</th>
<th>Rok urodzenia</th>
</tr>
TABLE;
while ($row = mysqli_fetch_assoc($result)){
  echo <<<ROW
  <tr>
  <td>$row[name]</td>
  <td>$row[surname]</td>
  <td>$row[urodziny]</td>
  <td><a href="./scripts/del_user.php?id=$row[id]">Usuń</a></td>
  </tr>
  ROW;
}
echo "</table>";
 ?>

  </body>
</html>
