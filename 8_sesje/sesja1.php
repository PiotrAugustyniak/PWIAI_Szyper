<?php
session_start();
$_SESSION['name'] = "Janusz"; // warto tutaj dawac cudzyslow bo jak jest C# to mysli ze jeden znak
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Strona tytułowa</title>
  </head>
  <body>
    <p>Strona startowa</p>
    Witamy
    <?php 
    echo $_SESSION['name']; ?>
    na stronie!<hr>
    <?php
    echo "identyfikator sesji: ", session_id();
     ?>
     <br><a href="./sesja2.php">Strona druga</a>
  </body>
</html>
