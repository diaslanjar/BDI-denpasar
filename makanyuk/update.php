<?php
    require_once('config.php');

    $id_resto = $_GET['id_resto'];
    $nama_makanan = $_POST['nama_makanan'];
    $harga_makanan = $_POST['harga_makanan'];

    $query = "UPDATE resto set nama_makanan = '$nama_makanan', harga_makanan = '$harga_makanan'
    WHERE id_resto = '$id_resto'";

    if ($query = mysqli_query($koneksi, $query)) {
        header('location: resto.php?status=success_ubah');
    } else {
        header('location: resto.php?status=error');
    }
?>