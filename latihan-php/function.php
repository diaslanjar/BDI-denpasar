<?php
$j = 6;
$k = 8;
$l = 4;
$jumlah = pow($j, 2) + pow($k, 2);
$jumlahbaru = pow2($j, 2) + pow2($k, 2);
echo $jumlah . "<br>";
echo $jumlahbaru . "<br/>";
function pow2($jumlah, $pangkat){
    return $jumlah ** $pangkat;
}
?>