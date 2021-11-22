<?php
    class provinsi{
        var $namakota;
        var $ibukota;
        var $website;
        var $gubernur;
        var $wakgubernur;
    }
    $kotaBali = new provinsi();

    $kotaBali->namakota="Bali";
    $kotaBali->ibukota="Denpasar";
    $kotaBali->website="denpasarkota.go.id";
    $kotaBali->gubernur="Wayan Koster";
    $kotaBali->wakgubernur="Cok Ace";

    echo $kotaBali->namakota;
    echo "<br>";
    echo $kotaBali->ibukota;
    echo "<br>";
    echo $kotaBali->website;
    echo "<br>";
    echo $kotaBali->gubernur;
    echo "<br>";
    echo $kotaBali->wakgubernur;
    echo "<br>";
?>