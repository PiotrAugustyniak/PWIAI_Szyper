<?php
function wartosc($a):string{
  if ($a < 0){
    return 'ujemna';
  }else if($a == 0){
    return 'zero';
  }else{
    return 'dodatnia';
  }
}
echo wartosc(4),'<br>';//4
echo gettype(wartosc(4)),'<br>';// string

function getValue():int{
  return 20.55;
}

echo getValue(),'<br>';//20
#########################################
//zasieg zmiennych

$x = 10;
function wyswietl(){
  echo "Wartosc zmiennej \$x wynosi: ";//notice undefined veriable
  echo $GLOBALS['x'],'<br>';
}
wyswietl(); // 10
function wyswietl2(){
  echo "Wartosc zmiennej \$x wynosi: $GLOBALS[x]<br>";//10, x trzeba dac bez apostrofow
  //bo dostaje zakleszczenia i jest blad WHITESPACE
  //echo $GLOBALS['x'],'<br>;'
}
wyswietl(); // 10

$y = 5;
function wyswietlY(){
  global $y;
  echo "wartosc zmiennej \$y wynos: $y<br>";
}

wyswietlY(); // 5

#############################################################################

function sum(){
  $liczba = 10;
  echo "\$liczba wynosi: $liczba<br>";
  $liczba +=10;
}

sum();//10
sum();//10

#############################################################################
function sum1(){
  static $liczba = 10;
  echo "\$liczba wynosi: $liczba<br>";
  $liczba +=10;
}

sum1();//10
sum1();//20
sum1();//30
##############################################################################
//argumenty

function add($x, $y = 1){
return $x + $y;
}

$z = 20;
echo add($z),'<br>'; //21
echo add(2,5),'<br>'; //7
echo add($z, $z),'<br>'; //40

#############################################################################
// argumenty i typy danych

function multi(float $x, int $y){
  return $x * $y;
}

echo multi(3, 4),'<br>'; //12
echo multi(3.5, 2),'<br>'; //7
echo multi(2, 3.5),'<br>'; //6

 ?>
