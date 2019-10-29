<!--
Użytkownik podaje z klawiatury ilosc osob w rodzinie.
Po prawidlowym podaniu lizcby z przedzialu <1;70>
Na ekranie wyswietli sie tyle pol numerycznych ile jest osob
w rodzinie. Napisz funkcje, ktora obliczy sredni wiek, najmlodsza i najstarsza
osobe z rodziny i wyswietli w liscie punktowanej w formacie:
 * sredni wiek: ... lat
 * najmlodsza  osoba ma: ... lat
 * Najstarsza osoba ma: ... lat
-->
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form method="post">
      <input type="number" name="iloscDzieci"><br>
      <input type="submit" name="guzior" value="Submit">
    </form>
    <?php
    if (!empty($_POST['iloscDzieci']) && $_POST['iloscDzieci']>0 && $_POST['iloscDzieci']<71){
      $ilosc = $_POST['iloscDzieci'];
      echo "<form>";
      for ($i=1; $i <= $ilosc; $i++) {
        echo "<input type=\"number\" name=\"wiek . $i\"><br>";
      }
      echo "</form>";
    }
     ?>
  </body>
</html>
