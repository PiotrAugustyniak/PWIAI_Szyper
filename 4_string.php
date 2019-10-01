<?php
$text = <<< TEKST
  zsk - Zespół
  szkół
  komunikacji
TEKST;
echo "Przed uzyciem funkcji nl2br:<br>$text<br>"; //newlinetobreak
echo "<br>Po uzyciu funkcji nl2br:<br> ";
echo nl2br($text),'<hr>';

$text = 'Janusz';
//zamiana na male litery
echo strtolower($text),'<br>';//Janusz

//zamiana na duze litery
echo strtoupper($text);

$text = 'janusz Kowalski poznań';
//zamiana pierwszej litery na duza
echo ucfirst($text),'<br>'; // Janusz Kowalski poznań

// zamiana wszystkich pierwszyc liter na duze
echo ucwords($text); // Janusz Kowalski Poznań
echo '<hr>';
$lorem ='Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
echo $lorem,'<hr>';
$col = wordwrap($lorem, 40, '<br>');
$col = wordwrap($lorem, 40, '<hr>');
echo $col;

//czyszczenie zawartosci bufora
ob_clean();

###########################################################

//usuwanie bialych znakow

$name = 'Kasia';
$name1 = '  Kasia ';

echo 'Długość zmiennej $name1: ', strlen($name),'<br>';//5
echo 'Długość zmiennej $name: ', strlen($name1),'<br>';//8

echo strlen(ltrim($name1));//6
echo strlen(rtrim($name1));//7
echo strlen(trim($name1));//5

//przeszukiwanie ciagow znakow
echo '<hr>';
$address = 'Poznań, ul. Fredry 13, tel. (61) 445-44-58';
$search = strstr($address, 'tel');
echo $search, '<br>'; //tel. (61) 445-44-58

$address = 'Poznań, ul. Fredry 13, tel. (61) 445-44-58';
$search = strstr($address, ', tel', true);
echo $search,'<br>'; //Poznań, ul. Fredry 13

$address = 'Poznań, ul. Fredry 13, tel. (61) 445-44-58';
$search = strstr($address, 'Tel');
echo $search,'<br>'; //nie zadziala

$mail = strstr('zsk@gmail.com', '@');
echo $mail,'<br>'; //@gmail.com

$mail = strstr('zsk@gmail.com', 64);
echo $mail,'<br>'; // @gmail.com

##################################################################
// przeszukiwanie ciagow znakowych

$ciag1 = 'a';
$ciag2 = 'aa';

echo strcmp($ciag1, $ciag2),'<br>'; //-1
echo strcmp('zzz', 'zzz'),'<br>'; //0
echo strcmp('zza', 'zzz'),'<br>'; //-1
echo strcmp('zzz', 'zza'),'<br>'; //1
echo strcmp('zzza', 'zzz'),'<br>'; //1

// pozycja
echo '<hr>';
$pos = strpos('abcdefg', 'cde');
echo $pos,'<br>'; //2

$pos = strpos('abcdabc', 'abc');
echo $pos,'<hr>'; //0

//zad 1.
/*
Sprawdz czy w ciagu o nazwie text1 znajduje sie ciag text2
*/

$text1 = 'abcdabcd';
$text2 = 'ab';
if(strpos($text1, $text2)>=0)
echo "znajduje sie",'<br>';
else echo "nie znajduje sie",'<br>';

//wersja Pana szypera

if(strpos($text1, $text2) === false){
  echo "Ciąg $text2 nie został znaleziony w ciagu $text1<br>";
}else{
  echo "Ciąg $text2 został znaleziony w ciągu $text1<br>";
}

//przetwarzanie ciagow znakow

$replace = str_replace('%name%', 'Janusz', 'Mam na imię: %name%');
echo $replace, '<hr>';

//substr

$surname = substr('Janusz Kowalski', 3);
echo $surname, '<br>'; //usz Kowalski

$surname = substr('Janusz Kowalski', -3);
echo $surname, '<br>'; //ski

$surname = substr('Janusz Kowalski', -8, 5);
echo $surname, '<br>';
$surname = substr('Janusz Kowalski', 7, 5);
echo $surname, '<br>';

#######################################################################
// zamiana polskich znakow
echo '<hr>';
$login = 'żakol';
$censore = array('ą', 'ę', 'ś', 'ż', 'ź', 'ć', 'ó','ń', 'ł');
$replace = array('ą', 'ę', 'ś', 'z', 'ź', 'ć', 'ó','ń', 'l');

$newLogin = str_replace($censore, $replace, $login);
echo ucfirst($newLogin), '<br>'; //Zakol
echo '<hr>';

/*
Napisz aplikacje cenzurujaca zdanie podane przez uzytkownika.
Uzytkownik podaje dane w formularzu.
Zamień słowa: biały, czarny na ciąg znaków ' ##### '
*/
echo <<< FORM
<form method="post">
  <input type="text" name="dane" placeholder="Wpisz zdanie"><br><br>
  <input type="submit" value="Zatwierdź">
</form>
FORM;
if(isset($_POST['dane'])){
  $data = $_POST['dane'];
  //echo $data;
  $niedozwolone = array('czarny', 'biały');
  $zamiana = ' ##### ';
  $poprawne = str_replace($niedozwolone, $zamiana, $data);
  echo "<h6>Błędne dane: $data</h6>";
  echo "<h3>Poprawne dane: $poprawne</h3>";
}
 ?>
