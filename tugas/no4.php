<?php
    function kurang($a, $b){
        $angka1 = $a;
        $angka2 = $b;
        $hasil = $angka1 - $angka2;
        return $hasil;
    }
    $hasil = kurang(11,4);
    echo $hasil;
    echo "<br>";
?>