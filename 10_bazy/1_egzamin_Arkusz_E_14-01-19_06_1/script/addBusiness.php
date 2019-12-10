<?php
if (!empty($_POST['dostawca']) && !empty($_POST['adres'])) {
  $dostawca = $_POST['dostawca'];
  $adres = $_POST['adres'];
require("connect.php");
$dodanie = "INSERT INTO dostawcy (nazwa,adres) VALUES ('$dostawca', '$adres')";
$result = mysqli_query($connect,$dodanie);
if($result){
  echo "Prawidłowo dodano rekord"
}else{"Nie dodano danych"}
}else{ header('Location: ../index.php');}
?>
