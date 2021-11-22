<?php
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $asal = $_POST['asal'];
    $jeniskelamin = $_POST['jeniskelamin'];
    $foto = $_FILES['foto']['name'];
    $tmp = $_FILES['foto']['tmp_name'];

    $imagenew = date('amYHis'). $foto;
    $path = "img/". $imagenew;
    $link_image = $path;

    if (!move_uploaded_file($tmp, $path)){
        echo "Upload File Gagal";
    }

    include('hasil.php');
?>