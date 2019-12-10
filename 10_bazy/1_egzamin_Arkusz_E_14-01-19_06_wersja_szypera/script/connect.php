<?php
    $connect = @mysqli_connect("localhost","root","","sklep");
    if ($connect === false) {
      die("Błąd połączenia z bazą danych: ".mysqli_connect_error()); // przerywa skrypt
    }
    mysqli_set_charset($connect, "utf8");

 ?>
