<?php
    require_once('config.php');

    $id_makanan = $_GET['id_makanan'];
    $nama_makanan = $_POST['nama_makanan'];
    $harga_makanan = $_POST['harga_makanan'];
    $jumlah_makanan = $_POST['jumlah_makanan'];

    $query = "UPDATE makanan set id_makanan ='$id_makanan', nama_makanan = '$nama_makanan', harga_makanan = '$harga_makanan',
    jumlah_makanan = '$jumlah_makanan' WHERE id_makanan = '$id_makanan'";

    if ($query = mysqli_query($koneksi, $query)) {
        header('location: index.php?status=success_ubah');
    } else {
        header('location: index.php?status=error');
    }
?>