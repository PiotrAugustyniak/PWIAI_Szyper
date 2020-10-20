<?php
class A{
  private $a;
  public function showA(){
    return "Funkcja w klasie A";
  }
  public function setA($a){
    $this->a = $a;
  }
}
class B extends A{
  private $b;
  public function showB(){
    return "Funkcja w Klasie B";
  }
}
$obj = new A();
echo $objA->showA();
//echo $objA->showB(); tu ten blad
$objB = new B();
echo $objB->showB();
echo $objB-showA();// jak jest obiekt podrzedny to z nadrzednej mozemy wywolac a tak to blad

//$objB->b=10;
$objB->setA(10);
$objB->a=10;
echo $objB->a;


 ?>
