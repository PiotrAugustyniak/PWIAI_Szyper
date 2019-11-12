<?php
session_start(); // musi byc w kazdym pliku
unset($_SESSION['name']); // zeby na nowo byla zmienna trzeba przejsc na 1 gdzie byla utworzona
session_destroy();
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Strona 3</title>
  </head>
  <body>
    <p>Strona 3</p>
    Witamy
    <?php
    echo $_SESSION['name']; ?>
    na stronie!<hr>
    <?php
    echo "identyfikator sesji: ", session_id();
     ?>
     <br><a href="./sesja1.php">Strona tytułowa</a>
  </body>
</html>
