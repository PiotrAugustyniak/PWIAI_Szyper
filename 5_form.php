<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="./css/style.css">
  </head>
  <body>
    <form  method="post">
      <input type="text" name="name" placeholder="Podaj imię" autofocus autocomplete="off"><br><br>
      <input type="number" name="age" placeholder="Podaj wiek"><br><br>
      <input type="submit" name="button" value="Zatwierdź">
    </form>

    <!-- Zabezpiecz formularz przed podaniem blednych danych tj, biale znaki, ogranicz ilosc znakow do 10
    dla imienia, pierwsza litera w imieniu ma byc duza a pozostale male.
    Wyswietl dane w formacie:
    Przed poprawa : ...
    Po zmianie: ...

    Dane poprawione wyswietl w tabeli z naglowkami o nazwach: Imie oraz wiek
    Dodaj arkusz styli o nazwie style.css i umiesc go w folderze css -->
       <?php
      /*if(!empty($_POST['name']) && !empty($_POST['age'])) {
        $imie = $_POST['name'];
        $wiek = $_POST['age'];
        echo "<h3>","Przed poprawą","</h3>", $imie, "<br>",$wiek,"<br>";
        $sprawdzenie = strlen($imie);
        echo $sprawdzenie,"- ilosc znakow","<br>";
        echo "<h1>","Po poprawie","</h1>";
        $imie = ucfirst(trim($imie));
        echo $imie,"<br>",$wiek,"<br>";
        $sprawdzenie = strlen($imie);
        echo $sprawdzenie," - ilosc znakow","<br>";
      }
           */ // to moje ale nie dokonczone i takie slabe
     if (!empty($_POST['name']) && !empty($_POST['age'])) {
       $name = $_POST['name'];
       $age = $_POST['age'];

       echo "Dane przed poprawą: $name<br>";
       $sprawdzenie = strlen($name);
       echo "Tyle znakow ma tekst : ", $sprawdzenie,"<br>";

      // tak ma szyperek ale 2 jest lepsze $nameNew = substr(ucfirst(strtolower(trim($name))),0, 10);
      $nameNew = ucfirst(strtolower(substr(trim($name),0, 10)));
       echo "Poprawne dane: $nameNew<br>";
      ?>
      <table>
        <tr>
          <th>Imię</th>
          <th>Wiek</th>
        </tr>
        <tr>
          <td><?php echo $nameNew; ?></td>
          <td><?php echo $age; ?></td>
        </tr>
      </table>
      <?php
      $sprawdzenie = strlen($nameNew);
      echo "Tyle znakow ma tekst : ", $sprawdzenie;
     }
     ?>
  </body>
</html>
