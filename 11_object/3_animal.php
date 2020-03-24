<?php
require_once '.\obiekty\Animal.php';

$zwierze1 = new Animal("Slon","100000","200");
$zwierze2 = new Animal("Piesek","50","50");
echo $zwierze1->getAll(),"<br>";
echo $zwierze2->getAll(),"<br>";

$zwierze2->setName("Kochany Piesek");
echo $zwierze2->getName();
echo $zwierze2->getAll();
 ?>
