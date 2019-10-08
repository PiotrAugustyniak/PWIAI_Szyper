<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form method="get">
      <input type="text" name="country" placeholder="Podaj kraj" autofocus><br><br>
      <input type="radio" name="lang" value="pl" checked>polski
      <input type="radio" name="lang" value="en">angielski<br><br>
      <input type="submit" name="button" value="Zatwierdź">
    </form>
    <?php
    if (!empty($_GET['country'])) {
      $lang = $_GET['lang'];
      $country = $_GET['country'];
      echo $country,'<br>';

      switch ($lang) {
        case 'pl':
          $lang = 'polski';
          break;
        case 'en':
          $lang = 'angielski';
          break;
      }
      echo $lang,'<br>';
    }
     ?>
  </body>
</html>
