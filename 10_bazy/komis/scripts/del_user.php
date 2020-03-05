<?php
if(isset($_GET['id'])){

  $id = $_GET['id'];
  //echo $id;

  require_once('./connect.php');
  $sql = "DELETE FROM user WHERE user.id = $id";
//  $sql = "DELETE FROM `user` WHERE `user`.`id` = '$id'";
 mysqli_query($conn, $sql);
}
header('location: ../'); // nie trzeba wpisac index
 ?>
