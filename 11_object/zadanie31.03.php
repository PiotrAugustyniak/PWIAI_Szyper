<?php

class Person{
  private $name;
  private $surname;
  private $age;
  public function getAll(){
    return <<<SHOW
    <br>imie:$this->name
    <br>nazwisko:$this->surname
    <br>wiek:$this->age<br>
SHOW;
  }
  function __construct($name=null,$surname=null,$age=null){
    if($name==null and !empty($_POST['name'])) $name = $_POST['name'];
    if($surname==null and !empty($_POST['surname']))$surname = $_POST['surname'];
    if($age==null and !empty($_POST['age']))$age = $_POST['age'];
    $this->name = $name;
    $this->surname = $surname;
    $this->age = $age;
    if($name!=null and $surname!=null and $age!=null) return;
    echo '<form action="zadanie31.03.php" method="post">';
    if($name==null)echo '<input type="text" name="name" placeholder="imie">';
    if($surname==null)echo '<input type="text" name="surname"placeholder="nazwisko">';
    if($age==null)echo '<input type="number" name="age"placeholder="wiek">';
    echo '<input type="submit"value="przycisk">';
    echo '</form>';
  }
}
 $person1=new Person();
 echo $person1->getAll();
 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
   </body>
 </html>
