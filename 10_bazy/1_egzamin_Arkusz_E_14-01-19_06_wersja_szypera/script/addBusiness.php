<?php
if (!empty($_POST['dostawca']) && !empty($_POST['adres'])) {
  require("./connect.php");
  $dostawca = $_POST['dostawca'];
  $adres = $_POST['adres'];
$dodanie = "INSERT INTO dostawcy (nazwa,adres) VALUES ('$dostawca', '$adres')";
$result = mysqli_query($connect,$dodanie);
if($result){
  //echo "Prawidłowo dodano rekord";
  header('Location: ../index.php');
}else{
  echo "Błąd: ". mysqli_error($connect);
}
mysqli_close($connect);
}else{ header('Location: ../index.php');}
?>
