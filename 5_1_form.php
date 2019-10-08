<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    if (!empty($_GET['country'])) {
      echo $_GET['country'];
    }else{
  ?>

    <form method="get">
      <input type="text" name="country" placeholder="Podaj kraj">
      <input type="submit" name="button" value="Zatwierdź">
    </form>
    <?php
  }
     ?>
  </body>
</html>
