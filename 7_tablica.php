<?php
//tablice indeksowane numerycznie

$colors = array('Red', 'Green', 'Blue');
$colors[3] = 'Magenta';

for ($i=0; $i < count($colors); $i++) {
  $elem = $i +1;
  echo "Element $elem: $colors[$i]<br>";
}

function showArray($tab){
  for ($i=0; $i < count($tab); $i++) {
    $elem = $i +1;
    echo "Element $elem: $tab[$i]<br>";
  }
}
echo "<hr>";
showArray($colors);
echo "<hr>";

//foreach
// kluczem jest indeks
foreach ($colors as $key => $value) {
  $elem = $key +1;
  echo "Element $elem: $value<br>";
}
echo "<hr>";

//tablice asocjacyjne

$data = array(
  'imie' => 'Janusz',
  'nazwisko' => 'Nowak',
  'wiek' => 30
);
function showArrayAssoc($tab){
foreach ($tab as  $key => $value) {
echo "$key: $value<br>";
  }
}
//showArray($data);  nie dziala bo indeksy to nie liczby wiec for nie dizala
showArrayAssoc($data);
echo $data['imie'],'<br>';
echo "Imię: $data[imie]";
echo '<hr>';

//tablice wielowymiarowe
$student = array(
  array('Katarzyna','Nowak',30),
  array('Anna','Nowak'),
  array('Paweł','Kowal',20)
);
function showArray2Dforeach($tab2d){
  foreach ($tab2d as $key => $value) {
    echo "<br>";
    foreach ($value as $key => $value2) {
      echo $value2, ' ';
    }
  }
}
function showArray2Dfor($tab){
for($i=0;$i < count($tab); $i++){
  for($j=0; $j < count($tab[$i]); $j++){
    echo $tab[$i][$j],' ';
  }
  echo "<br>";
  }
}
function showArray2DforeachSzyper($tab){
  foreach ($tab as $value){
    foreach($value as $x){
      echo "$x ";
    }
    echo "<br>";
  }
}
showArray2Dfor($student);
echo "<hr>";
showArray2Dforeach($student);
echo "<hr>";
showArray2DforeachSzyper($student);

/*
  Utworz tablice 3-wymiarowa i napisz dla niej funkcje wyswietlajaca zawartosc
  Wykorzystaj foreach
*/
$auto = array(
  array(
    array('Fiat',2011, 'benzyna'),
    array('Audi',2018, 'gaz'),
    array('Kia',2019, 'benzyna')
  )
);
function showArray3D($tab){
foreach ($tab as $value) {
  foreach ($value as $value2) {
    foreach ($value2 as $value3) {
      echo $value3,' ';
    }
    echo "<br>";
    }
  }
}
echo "<hr>";
showArray3D($auto);
echo "<hr>";

//zdjecie od leonharda rekurencyjnie ale nie trzeba

//sortowanie
$tab = array(10, 2, 5, 75, -4, 100);
function wyswietl($tab){
  foreach ($tab as $value) {
    echo $value, ' ';
  }
  echo "<br>";
}
wyswietl($tab);
echo "<hr>";

//rosnaco
sort($tab);
wyswietl($tab);
echo '<hr>';
//malejaco
//rosnaco
rsort($tab);
wyswietl($tab);
echo '<hr>';

$tab = array('katarzyna', 'Anna', 'zenon', 'paweł');
wyswietl($tab);
sort($tab);
wyswietl($tab);// jak zmienisz Zenon np. na duza litere to bedzie przed kasia bo A-Z a-z
echo "<hr>";
//funkcja1 zamiana liter na małe
//funkcja2 sortowanie niemalejaco
//funkcja3 wyswietlenie danych po zamianie (pierwsza itera ma byc duza);
function funkcja1(&$tab){
foreach ($tab as $value) {
  echo strtolower($tab);
}
}
funkcja1($tab);
 ?>
