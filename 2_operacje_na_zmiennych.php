<?php
$potega = 2**10;
echo $potega;
//operatory bitowe: and &, or |, not `, xor ^, >>, <<
$x= 0b1010; //10
echo '<br>',$x;
$x = $x >> 1; //101
echo '<br>',$x;//5
$x = $x << 2; //10100
echo '<br>',$x,'<hr>';//20
####################################
$x = 1;
$y = 2;
$wynik = $x <=> $y;
echo $wynik,'<hr>';
####################################
$a = 1;
$b = 1.0;
/// === porownoje takze typ danych
if($a === $b){
  echo 'Identyczne','<hr>';
}else {
  echo 'Różne','<hr>';
}
echo gettype($a),'<br>'; //integer
echo gettype($b),'<br>';//double
######################################
$x = 2;
echo $x++,'<br>'; //2
echo ++$x,'<br>';//4
echo $x,'<br>';//4
$y = $x++;
echo $y,'<br>';//4
$y = ++$x;
echo $y,'<br>';//6
echo ++$y,'<br>','<hr>';//7
######################################
$tekst1 = '4ssd';
$tekst2 = 'Drugi tekst';
$tekst3 = '7';
$liczba1 = 14;
$j = -1;
$c = 100;
//operatory rzutowania
//bool, int, float, string, array, object, unset
$x = (int)$tekst1;
echo $x, '<br>';
$text2 = -1; // przy kazdej wartosci roznej od 0 bedzie true czyli 1, a false to nic
$x = (bool)$text2;
echo $x, '<br>';
$text3 = 10;
$x = (unset)$text3; //1
echo $x,'<br>';
echo gettype($x),'<br>'; // null
//echo phpinfo();
####################
//rozmiar typu integer
echo PHP_INT_SIZE,'<br>'; //8
//kontrola typu zmiennych
$x = 10;
echo is_int($x); //1 => true
echo is_string($x); //0 => false
echo is_bool($x); //0 => false
echo is_float($x); //0 => false
echo is_null($x); //0 => false
// @ - operator ignorowania błędów
$w;
echo $w;
echo @gettype($w),'<hr>';  //null
###########################
//zmienne superglobalne
//$_GET, $_POST, $_COOKIE, $_FILES, $_SESSION, $_SERVER
echo $_SERVER['SERVER_PORT'],'<br>';//80
echo $_SERVER['SERVER_NAME'],'<br>';//127.0.0.1 albo localhost
echo $_SERVER['SCRIPT_NAME'],'<br>';// sciezka pliku w htdoscie
echo $_SERVER['SERVER_PROTOCOL'],'<br>'; // HTTP/1.1
echo $_SERVER['DOCUMENT_ROOT'],'<br>'; // sciezka htdocs
//$lokalPliku = $_SERVER['DOCUMENT_ROOT'].$_SERVER['SCRIPT_NAME'];
$lokalPliku = $_SERVER['DOCUMENT_ROOT'];
$lokalPliku .= $_SERVER['SCRIPT_NAME'];
echo "$lokalPliku<hr>";
##########################################
//stałe
//nazwy z duzych liter!!!
define('NAZWISKO', 'Kowal');
echo NAZWISKO;
define('nazwisko', 'Nowak');
echo nazwisko; // mozna ale lepiej z duzych
define('WIEK', 18, true); // bez tego true nie dziala, domyslnie jest false oznacza on czy ma zwracac uwage na wielkosc liter
echo wIek, '<hr>'; // od wersji 8 PHP brak 3 argumentu
#############################################
// stałe predefiniowane
echo PHP_VERSION; //7.3.9
echo gettype(PHP_VERSION); //string
if(PHP_VERSION > 5.6){
  echo "Nowa wersja PHP";
}else{
  echo "Stara wersja PHP";
}
echo PHP_OS; //WINNT
echo __LINE__; //123 wyswietla linie z edytora
echo __FILE__; // sciezka
echo __DIR__; // folder
 ?>
