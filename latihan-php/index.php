<?php
    $a = 6;
    $b = 2;
    $kali = $a * $b;
    $bagi = $a / $b;
    $modulo = $a % $b;
    $boolean = ($a < $b) ? "true" : "false";

    echo "Perkalian : ". $a ." x ". $b ." = ". $kali;
    echo "<br>";
    echo "Pembagian : ". $a ." : ". $b ." = ". $bagi;
    echo "<br>";
    echo "Modulo : ". $modulo;
    echo "<br>";
    echo "Boolean : ". $boolean;
    echo "<br><br>";

    echo "==== Bagun Datar ====";
    echo "<br>";
    //luas persegi panjang//
    //panjang x lebar//
    $luaspp = $a * $b;
    echo "Luas Persegi Panjang : ". $luaspp;
    echo "<br>";

    //luas segitiga//
    //1/2 x alas x tinggi//
    $luassegitiga = 1/2 * $a * $b;
    echo "Luas Segitiga : ". $luassegitiga;
    echo "<br>";

    //keliling lingkaran//
    //2 x phi x r atau phi x d//
    $phi = 3.14;
    $r = 12;
    $kling = 2 * $phi * $r;
    echo "Keliling Lingkaran : ". $kling;
    echo "<br><br>";

    //if else//
    $x = 11;
    $y = 8;
    if ($x < $y) {
        echo "y lebih besar daripada x"; 
    } else {
        echo "y lebih kecil daripada x";
    }
    

    //Membuat if else bersarang untuk menempatkan nilai dibawah ini
    // Aturan Nilai
    // A -> 86 - 100
    // B -> 76 - 85
    // C -> 51 - 75
    // D -> 31 - 50
    // E -> 0 - 30
    $nilai = 100;
    if ($nilai >= 86) {
        echo "Saya mendapatkan nilai A";
    } else if ($nilai <= 85){
        echo "Saya mendapatkan nilai B";
    }
?>