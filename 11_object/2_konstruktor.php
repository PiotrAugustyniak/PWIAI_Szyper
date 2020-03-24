<?php
class Person{
  private $name;
  private $surname;
function __construct($name, $surname){
  $this->name = $name;
  $this->surname = $surname;
}
//function __conctruct // nie mozna przeciazac konstruktorow wiec wszystko trzeba w jednym
  public function setName($value){
    $this->name=$value;
  }
  public function getName(){
    return $this->name;
  }
  public function getNamenSurname(){
    return <<<SHOW
    <br>Imię i nazwisko: $this->name $this->surname<hr>
SHOW;
  }
  public function setSurname($value){
    $this->surname = $value;
  }
  public function getSurname(){
    return $this->surname;
  }
}

$osoba = new Person("Anna","Augustyniak");
//$osoba->name ="Jan"; // fatal erro nie mamy dostepu z poza klasy wiec nie zadziala bez setName public
$osoba->setName("Jan");
//echo $osoba->name; // tez nie zadziala
echo $osoba->getName(),"<br>";
echo $osoba->getSurname();
$osoba->setSurname("Pawlak");
echo $osoba->getNamenSurname();

 ?>
