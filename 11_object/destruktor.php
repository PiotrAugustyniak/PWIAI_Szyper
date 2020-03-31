<?php
class Person{
  private $name;
  function __construct($name=null){// jak jest tu null to nie ma bledu jak nic nie wpiszemy
    echo "Konstruktor<br>"
    $this->name = $name;
  }
  function __destruct(){
    echo "Destruktor<br>"
  }
}
echo "Pierwsza linia<br>";
$obj = new Person();
unset($obj);
echo "Ostatnia linia<br>";
/*
Dodaj składowe nazwisko, wiek do konstruktora(wszystkie skladowe maja byc prywatne)
sprawdz czy powyzsze skladowe zostaly przypisane podczas tworzenia nowego obiektu
jezeli beda mialy wartosc null to wyswietl na stronie formularz, ktory pozwoli przypisac
wartosci do skladowych
ustaw nowe wartosci dla obiektu
dodaj metoda wyswietlajaca wszystkie skladowe
*/
 ?>
