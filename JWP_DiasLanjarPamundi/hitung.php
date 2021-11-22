<?php 
    //fungsi menghitung persegi
    function persegi($sisi){
        return $sisi * $sisi;
    }

    //fungsi menghitung segitiga
    function segitiga($alas, $tinggi){
        return 0.5 * $alas * $tinggi;
    }

    //fungsi menghitung segitiga
    function lingkaran($jari_jari){
        return pi() * ($jari_jari * $jari_jari);
    }
?>