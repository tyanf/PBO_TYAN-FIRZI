<?php

class Kendaraan
{
    var $jumlahRoda;
    var $warna;
    var $bahanBakar;
    var $harga;
    var $merek;

    function StatusHarga() {
        if ($this ->harga > 50000000) $status = 'Mahal';
        else $status = 'Murah';
        return $status;
    }

    function SetMerek($x) {
        $this -> merek = $x;
    }

    function SetHarga($x) {
        $this -> harga = $x;
    }

}

$kendaraan1 = new Kendaraan ();
$kendaraan1 -> SetMerek('Yamaha Mio');
$kendaraan1 -> SetHarga(10000000);
echo $kendaraan1 -> statusHarga();
?>