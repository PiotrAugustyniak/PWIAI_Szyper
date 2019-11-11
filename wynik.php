 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <?php
      $elementy = array();
      $ilosc = $_POST['ileJest'];
      for ($i=1; $i <= $ilosc; $i++) {
        $czlonek = $_POST["wiek$i"];
        if(empty($czlonek)) header('Location: 6_1_funkcje.php');
        $elementy[$i-1] = $czlonek;
      }

       function najmlodszy($tab){
         $minimum = $tab[0];
         foreach ($tab as $value) {
           if($minimum>$value){
             $minimum = $value;
           }
         }
         echo $minimum;
       }
       function najstarszy($tab){
         $maksimum = $tab[0];
         foreach ($tab as $value) {
           if($maksimum<$value){
             $maksimum = $value;
           }
         }
         echo $maksimum;
       }
       function sredni($tab, $numberOf){
         $suma=0;
         foreach ($tab as $value) {
           $suma = $suma + $value;
         }
         $srednia = $suma/$numberOf;
         echo $srednia;

       }
      ?>
      <ul>
        <li>Średnik wiek: <?php sredni($elementy,$ilosc); ?> lat</li>
        <li>Najmłodsza osoba ma: <?php najmlodszy($elementy); ?> lat</li>
        <li>Najstarsza osoba ma: <?php najstarszy($elementy); ?> lat</li>
      </ul>
   </body>
 </html>
