<?php
class User{
  public $name;
  public $surname;
  public function setName($name){
   //$this->name = "Anna";
   $this->name = $name;
  }
  public function getName(){
    return $this->name;
  }

  public function setUser($name, $surname){
  $this->name = $name;
  $this->surname = $surname
  }

  public function show(){
    
  }
}

$person = new User;
$person->name = "Janusz";
echo $person->name;
$person->setName("Krystyna");
echo $person->name;
echo "<br>Imię". $person->getName();
$person->setUser("Anna","Kowalska")
 ?>
