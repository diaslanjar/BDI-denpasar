<?php
    require_once('config.php');

    $nama_makanan = $_POST['nama_makanan'];
    $harga_makanan = $_POST['harga_makanan'];
    $jumlah_makanan = $_POST['jumlah_makanan'];

    $query = "INSERT INTO makanan (nama_makanan, harga_makanan, jumlah_makanan) 
    VALUES ('$nama_makanan', '$harga_makanan', '$jumlah_makanan')";

    if ($query = mysqli_query($koneksi, $query)) {
        header('location: index.php?status=success_tambah');
    } else {
        header('location: index.php?status=error');
    }
    
?>