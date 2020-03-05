<?php
session_start();
 ?>
<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./css/style.css">
    <title>Użytkownicy</title>
  </head>
  <body>
    <?php

    if(isset($_SESSION['error'])){
      echo "<div class=\"red\">$_SESSION[error]</div>";
      unset($_SESSION['error']);
    }
    echo "<h3>Użytkownicy</h3>";
      require_once('./scripts/connect.php');

      $sql = "SELECT * FROM `user`";
      $result = mysqli_query($conn, $sql);

      echo <<<TABLE
        <table>
          <tr>
            <th>Imię</th>
            <th>Nazwisko</th>
            <th>Rok urodzenia</th>
          </tr>
TABLE;
    while ($row = mysqli_fetch_assoc($result)) {
      echo <<<ROW
        <tr>
          <td>$row[name]</td>
          <td>$row[surname]</td>
          <td>$row[birthday]</td>
          <td><a href="./scripts/del_user.php?id=$row[id]">Usuń</a></td>
          <td><a href="./?updateId=$row[id]">Aktualizuj</a></td>
        </tr>
ROW;
    }
  echo "</table>";

echo <<<FORMADDUSER
<h3>Dodawanie użytkownika</h3>
<form action="./scripts/add_user.php" method="post">
  <input type="text" name="name" placeholder="janusz"><br>
  <input type="text" name="surname" placeholder="Nowak"><br>
  <input type="date" name="birthday"><br>
  <input type="submit" value="Dodaj uzytkownika">
</form>
FORMADDUSER;
if(isset($_GET['updateId'])){
  echo "<h3>Aktualizacja użytkownika</h3>";
  $id = $_GET['updateId'];
  $sql = "SELECT * FROM user WHERE id=$id";
  $result = mysqli_query($conn, $sql);
  $user = mysqli_fetch_assoc($result);
  $name = $user['name'];
  $surname = $user['surname'];
  $birthday = $user['birthday'];
  echo <<<FORMUPDATEUSER
  <form action="./scripts/update_user.php" method="post">
    <input type="text" name="name" placeholder="janusz" value="$name"><br>
    <input type="text" name="surname" placeholder="Nowak" value="$surname"><br>
    <input type="date" name="birthday" value="$birthday"><br>
    <input type="hidden" name="id" value="$id"><br>
    <input type="submit" value="Aktualizuj uzytkownika">
  </form>
FORMUPDATEUSER;
}
  ?>
  </body>
</html>
