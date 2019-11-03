<html>
<head>
<style>
.czerwony{
  background:red;
}
.niebieski
{
  background:blue;
}
table, td, th{
	border:1px solid black;
	border-collapse:collapse;
	text-align:center;
	padding:5px;
}
th{
	font-size:15px;
}
</style>
</head>
<body>
<form method="post">
Wpisz do jakiej liczby ma sie robic tabliczka mnozenia.<br>
<input type="text" name="liczba"><br>
<input type="submit" value="Zatwierdź">
</form>
<table>
<?php
if(!empty($_POST["liczba"])){
	$pomocnicza=$_POST["liczba"];
	$suma1=0;
	$suma2=0;
		echo'<tr>';
		for($i=0;$i<=$pomocnicza;$i++){
      if($i==0){
        echo'<th>','','</th>';}
			else echo'<th>',$i,'</th>';
		}
		echo'</tr>';
		for($i=1;$i<=$pomocnicza;$i++){
		echo '<tr>';
		echo '<th>',$i,'</th>';
		for($j=1;$j<=$pomocnicza;$j++){
			if($i==$j){
			echo'<td class="czerwony">',$j*$i,'</td>';
			$suma1=$suma1+$i*$j;
			}
			else if($i+$j==$pomocnicza+1){
			echo'<td class="niebieski">',$j*$i,'</td>';
			$suma2=$suma2+$i*$j;
			}
			else
			echo '<td>',$j*$i,'</td>';
		}
		echo'</tr>';
	}
  echo '<hr>';
  echo'Suma pierwszej przekątnej: ',$suma1,'<br>';
  echo'Suma drugiej przekątnej: ',$suma2,'<br>';
  echo'Suma obydwóch przekątnych: ',$suma1+$suma2;
}
?>
</table>
</body>
</html>
