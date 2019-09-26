<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    Początek pliku
<?php
/*
include('././3_dolaczanie_pliku/plik.php')//zawsze kropka bo moze nam na linuxie nie odnalezc
include_once('././3_dolaczanie_pliku/plik.php')//powieli sie a jak once to nie
*/
require('./3_dolaczanie_pliku/plik.php');
require_once('./3_dolaczanie_pliku/plik.php'); // jesli zrobimy z bledem to reszta pliku sie nie wyswietli
 ?>
    Koniec pliku
  </body>
</html>
