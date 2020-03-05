<?php
session_start();
if (!empty($_POST['name']) &&!empty($_POST['surname']) && !empty($_POST['birthday'])) {
  $name = $_POST['name'];
  $surname = $_POST['surname'];
  $birthday = $_POST['birthday'];

  require_once('./connect.php');
  $sql = "INSERT INTO `user` (`name`, `surname`, `birthday`) VALUES ('$name','$surname','$birthday')";

  if(mysqli_query($conn,$sql)){
  echo "ok";
}else{
  echo "error";
}


}else{
  $_SESSION['error'] = "Wypełnij wszystkie pola";
}
header('location: ../')
 ?>
