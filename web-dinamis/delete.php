<?php
    require_once('config.php');

    $id_makanan = $_GET['id_makanan'];

    $query = "DELETE FROM makanan WHERE id_makanan='$id_makanan'";

    if ($query = mysqli_query($koneksi, $query)) {
        header('location: index.php?status=success_hapus');
    } else {
        header('location: index.php?status=error');
    }
?>