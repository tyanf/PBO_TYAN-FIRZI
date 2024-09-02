<?php

class Kendaraan
{
    var $jumlahRoda;
    var $warna;
    var $bahanBakar;
    var $harga;
    var $merek;
    var $tahunPembuatan;

    function setMerek($X) {
        $this -> merek = $X;
    }

    function getMerek(){
        return $this -> merek;
    }

    function setHarga($y){
        $this -> harga = $y;
    }

    function getHarga(){
        return $this -> harga;
    }
}

$kendaraan1 = new kendaraan;
$kendaraan1 -> SetMerek('Yamaha MIO');
$kendaraan1 ->setHarga(100000);
echo $kendaraan1 -> getMerek();
echo "<br />";
echo $kendaraan1 -> getHarga();

?>