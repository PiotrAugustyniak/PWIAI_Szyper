<?php
session_start(); // musi byc w kazdym pliku
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Strona 2</title>
  </head>
  <body>
    <p>Strona 2</p>
    Witamy
    <?php
    echo $_SESSION['name']; ?>
    na stronie!<hr>
    <?php
    echo "identyfikator sesji: ", session_id();
     ?>
     <br><a href="./sesja3.php">Strona trzecia</a>
  </body>
</html>
