<!DOCTYPE html>
<html>
<head>
	<title>Menghitung Faktorial</title>
</head>
<body background="https://i.pinimg.com/originals/fa/2b/4b/fa2b4b00f4f120ae5c456f5e040d0dbc.jpg">
<?php
$n = isset($_POST['n']) ? $_POST['n'] : NULL;
if(isset($_POST['submit'])){
	if ($n!=NULL) {
		$bil = 1;
		for($i=1; $i<=$n; $i++){
			$bil = $bil*$i;
		}
	}else{
		$bil = 'Harap Masukan Bilangan !';
	}
}
echo '<div class="panel">';
echo '<h1> Menghitung Faktorial</h2>';
echo '<h3> Masukan Bilangan :</h3>';
echo '<form action="" method="post">';
echo '<input class="field" type="text" name="n" value="'.$n.'" placeholder="Masukkan Bilangan..."/>';
echo '<input class="tombol" type="submit" name="submit" value="Submit"/>';
echo '</form>';
if((isset($n))and($n!=NULL)){
	echo '<h3>Hasil Faktorial :<h3>';
	for($i=1; $i<$n; $i++){
		echo $i.'x';
	}
	echo $n;
	echo '<br/>';
}
echo '<h3>Jumlah dari faktorial diatas adalah</h3>';
echo '<input class="field" type="text" value="'.(isset($bil) ? $bil : NULL).'" readonly/>';
echo '</div>';
?>
</body>
</html>