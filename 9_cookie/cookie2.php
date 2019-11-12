<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form method="post">
      <input type="text" name="imie" >
      <input type="submit">
    </form>
    <?php
    if(isset($_COOKIE["name"])){
      echo $_COOKIE["name"];
    }else if(!empty($_POST["imie"]) && !isset($_COOKIE["name"])){
     setcookie("name", "$_POST[imie]",time()+86400);
     echo "<script> location.reload()</script>";
     echo $_COOKIE["name"];
   }
     ?>
  </body>
</html>
