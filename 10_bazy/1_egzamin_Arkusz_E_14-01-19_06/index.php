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
        mysqli_close($connect);
     ?>
     <form method="post">
       <select name="towar">
         <option value="c">Czekolada</option>
         <option value="g">Grześki</option>
         <option value="b">Baton</option>
         <option value="w">Wafle</option>
       </select>
       <input type="submit" name="button" value="WYBIERZ" >
     </form>

      <?php
      //skrypt2
      if (isset($_POST['towar'])) {
        $towar = $_POST['towar'];
        switch ($towar) {
          case 'c':
            $towar = "Czekolada";
            break;
          case 'g':
            $towar = "Grześki";
            break;
          case 'b':
            $towar = "Baton";
            break;
          case 'w':
            $towar = "Wafle";
            break;
        }
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
  </body>
</html>
