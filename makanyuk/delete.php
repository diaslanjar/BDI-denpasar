<?php
    require_once('config.php');

    $id_resto = $_GET['id_resto'];

    $query = "DELETE FROM resto WHERE id_resto='$id_resto'";

    if ($query = mysqli_query($koneksi, $query)) {
        header('location: resto.php?status=success_hapus');
    } else {
        header('location: resto.php?status=error');
    }
?>