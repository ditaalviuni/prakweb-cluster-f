<?php
    $nrp = $_POST['nrp'];
    $nama = $_POST['nama'];
    $id_jur = $_POST['jurusan'];
    
    $conn = mysqli_connect("localhost", "root", "", "mahasiswa") or die("Koneksi Database Gagal");
    $query = mysqli_query($conn, "insert into mahasiswa values ('$nrp', '$nama', '$id_jur')");
    
    if($query) {
        echo "<script>alert('Berhasil Ditambah'); window.location.replace('index.php'); </script>";
    } else {
        echo "<script> alert('Gagal');</script>";
    }

    mysqli_close($conn);