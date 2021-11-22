<?php
    //inisiasi variabel
    define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'makanyuk');

    //proses koneksi ke database
    $koneksi = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

    //cek koneksi
    if ($koneksi === false) {
        die("ERROR: tidak bisa konek ").mysqli_connect_error();
    } else {
        // echo "Koneksi Berhasil";
    }
?>