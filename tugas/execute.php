<?php
    include('typedata.php');

    // $hewan = new Hewan("Ular", "Kanguru", "Burung", "Harimau");
    // echo "Hewan Melata: ". $hewan->get_melata();
    // echo "<br>";
    // echo "Hewan Melompat: ". $hewan->get_melompat();
    // echo "<br>";
    // echo "Hewan Terbang: ". $hewan->get_terbang();
    // echo "<br>";
    // echo "Hewan Buas: ". $hewan->get_buas();

    $hewan = new Hewan();

    print_r($hewan->melata(). "<br>". $hewan->terbang(). "<br>". $hewan->buas());
?>