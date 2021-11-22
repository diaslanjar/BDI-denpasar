<?php
    require_once('config.php');

    $nama_makanan = $_POST['nama_makanan'];
    $harga_makanan = $_POST['harga_makanan'];

    $query = "INSERT INTO resto (nama_makanan, harga_makanan) 
    VALUES ('$nama_makanan', '$harga_makanan')";

    if ($query = mysqli_query($koneksi, $query)) {
        header('location: resto.php?status=success_tambah');
    } else {
        header('location: resto.php?status=error');
    }
    
?>