<?php
class Animal{
  private $name;
  private $weight;
  private $height;
function __construct($name,$weight,$height){
  $this->name = $name;
  $this->weight = $weight;
  $this->height = $height;
}
public function setName($value){
  $this->name=$value;
}
public function setWeight($value){
  $this->weight=$value;
}
public function setHeight($value){
  $this->height=$value;
}
public function getName(){
  return $this->name;
}
public function getWeight(){
  return $this->weight;
}
public function getHeight(){
  return $this->height;
}
  public function getAll(){
    return <<<SHOW
    <br>Nazwa,waga(kg),wysokosc-zwierzecia(cm): $this->name $this->weight $this->height<hr>
SHOW;
  }
}
 ?>
