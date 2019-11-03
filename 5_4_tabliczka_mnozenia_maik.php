<html>
<head>
<style>
.kat{background:red;}
.kat2{background:blue;}
table, td, th{
	border:2px solid black;
	border-collapse:collapse;
	text-align:center;
	padding:2px;
}
th{
	font-size:20px;
}
</style>
</head>
<body>
<form method="post">
<input type="text" name="a">
<input type="submit" value="tekściwo">
</form>
<table>
<?php
if(!empty($_POST["a"])){
	$a=$_POST["a"];
	$suma1=0;
	$suma2=0;
		echo'<tr>';
		for($i=0;$i<=$a;$i++){
			echo'<th>',$i,'</th>';
		}
		echo'</tr>';
		for($i=1;$i<=$a;$i++){
		echo '<tr>';
		echo '<th>',$i,'</th>';
		for($j=1;$j<=$a;$j++){
			if($i==$j){
			echo'<td class="kat">',$j*$i,'</td>';
			$suma1+=$i*$j;
			}
			else if($i+$j==$a+1){
			echo'<td class="kat2">',$j*$i,'</td>';
			$suma2+=$i*$j;
			}
			else
			echo '<td>',$j*$i,'</td>';
		}
		echo'</tr>';
	}
	echo'<tr><td colspan=',$a+1,'> Suma pierwszej przekątnej: ',$suma1,' Suma drugiej przekątnej: ',$suma2,'</td></tr>';
}
?>
</table>
</body>
</html>
