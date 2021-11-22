<?php
    class Hewan{
        // public $melata, $melompat, $terbang, $buas;

        // public function __construct($melata, $melompat, $terbang, $buas){
        //     $this->melata=$melata;
        //     $this->melompat=$melompat;
        //     $this->terbang=$terbang;
        //     $this->buas=$buas;
        // }
        // public function get_melata(){
        //     return $this->melata;
        // }

        // public function get_melompat(){
        //     return $this->melompat;
        // }

        // public function get_terbang(){
        //     return $this->terbang;
        // }

        // public function get_buas(){
        //     return $this->buas;
        // }

        public function melata($hmelata = "Ular"){
            return $hmelata . " adalah hewan melata";
        }

        public function terbang($hterbang = "Burung"){
            return $hterbang . " adalah hewan yang dapat terbang";
        }

        public function buas($hbuas = "Harimau"){
            return $hbuas . " adalah hewan buas";
        }
    }
