<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sklep papierniczy</title>
  </head>
  <body>
    <?php
      //skrypt1
        $sql = "SELECT `nazwa` FROM `towary` WHERE `promocja` = 1";

        $connect = mysqli_connect("localhost","root","","sklep");
        mysqli_set_charset($connect, "utf8");
        $result = mysqli_query($connect, $sql); // mozna wyslac cale zapytanie albo zmienna
        echo "<ul>";
            while ($row = mysqli_fetch_assoc($result)) {
              echo "<li>",$row["nazwa"],"</li>";
            }
        echo "</ul>";
     ?>
     <form method="post">
       <select name="towar">
         <?php
        $sql = "SELECT `nazwa` FROM `towary`";
        $result = mysqli_query($connect, $sql);
        while($row = mysqli_fetch_assoc($result)){
          echo "<option value=\"$row[nazwa]\">$row[nazwa]</option>";
        }
          mysqli_close($connect);
          ?>
       </select>
       <input type="submit" name="button" value="WYBIERZ" >
     </form>

      <?php
      //skrypt2
      if (isset($_POST['towar'])) {
        $towar = $_POST['towar'];

        //echo $towar;
        //  $sql = "SELECT `cena` FROM `towary` WHERE `nazwa` =\"cienkopis\"";
    //    $sql = "SELECT `cena` FROM `towary` WHERE `nazwa` ='cienkopis'"; // jak apostrofy to nie musi byc \
    $connect = mysqli_connect("localhost","root","","sklep");
    mysqli_set_charset($connect, "utf8");
        $sql = "SELECT `cena` FROM `towary` WHERE `nazwa` ='$towar'";
        $result = mysqli_query($connect, $sql);
        $row = mysqli_fetch_assoc($result);

        $promotion = round($row['cena'] * 0.85, 2);
        echo $promotion;
      }

       ?>
      <hr>
       <h1>Dodanie dostawcy towaru</h1>
       <form action="script/addBusiness.php" method="post">
         <input type="text" name="dostawca">Nazwa <br>
         <input type="text" name="adres">Adres <br>
         <input type="submit" name="guzik" value="Dodaj">
       </form>
  </body>
</html>
