<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menghitung harga bet</title>
</head>
<body>

<form method="post">
    Nama : <input type="text" name="huruf">
    <button type="submit" name="submit">Submit</button>
    <button onClick="window.location.reload();">Refresh</button>
</form>

<?php 

function jumhuruf($huruf){
    $jum = strlen($huruf);
    return $jum;
}

if(isset($_POST['submit'])){
    $huruf = $_POST['huruf'];
    if(jumhuruf($huruf)==" "){
        echo '<font color="red">Nama : Harap Masukan Nama</font>'; echo '<br>';
        echo '<font color="red">Harga : Harap Masukan Harga </font>';
    }

    else if(jumhuruf($huruf)<=10){
        $harga = 300;
        $tot = jumhuruf($huruf)*$harga;
        echo '<font color="#9932CC">Nama : '.$huruf.'</font>'; echo '<br>';
        echo '<font color="#9932CC">Harga : '.$tot."</font>";
    }

    elseif(jumhuruf($huruf)<=20){
        $harga = 500;
        $tot = jumhuruf($huruf)*$harga;
        echo '<font color="#FF1493">Nama : '.$huruf.'</font>'; echo '<br>';
        echo '<font color="#FF1493">Harga : '.$tot."</font>";
    }

    elseif(jumhuruf($huruf)>20){
        $harga = 700;
        $tot = jumhuruf($huruf)*$harga;
        echo '<font color="#00BFFF">Nama : '.$huruf.'</font>'; echo '<br>';
        echo '<font color="#00BFFF">Harga : '.$tot."</font>";
    }
}

?>


</body>
</html>