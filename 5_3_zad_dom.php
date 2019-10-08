<!--
Użytkownik podaje dane z klawiatury w polach:
textarea, text, oraz number
Wyczyść dane z białych znaków.
Ogranicz pole text area do 50 znaków.
Wyswietl dane z textarea zwracajac uwage na znaki break
Formularz dodaj z drugiego pliku o nazwie form.php
-->

<?php
include('form.php');
if(!empty($_GET['text']) && !empty($_GET['number']) && !empty($_GET['textarea'])){
$text = $_POST['text'];
$number = $_POST['number'];
$textarea = $_POST['textarea'];

$textNew = trim('text');
$numberNew = trim('number');
$textAreaNew = substr(nl2br(trim('textarea'), 0, 50));
echo $textNew,"<br>";
echo $numberNew,"<br>";
echo $textAreaNew,"<br>";
}
 ?>
