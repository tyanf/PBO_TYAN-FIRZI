<?php

class Kendaraan
{
    var $platNo = "Ganjil";
    var $tahunPembuatan = 1999;
    var $bahanBakar = "Premium";
    var $harga = 50000000;

    function StatusHarga() {
        if ($this->harga > 50000000) {
            $status = 'Mahal';
        } else {
            $status = 'Murah';
        }
        return $status;
    }

    function subsidi() {
        if ($this->bahanBakar == "Premium" && $this->tahunPembuatan < 2005) {
            return "Mendapat subsidi";
        } else {
            return "Tidak dapat subsidi";
        }
    }

    function Hargabekas() {
        if ($this->tahunPembuatan < 2000) {
            return $this->harga * 0.4;
        } elseif ($this->tahunPembuatan <= 2005) {
            return $this->harga * 0.3;
        } else {
            return $this->harga * 0.2;
        }
    }

    function pajak() {
        if ($this->tahunPembuatan <= 2017) {
            $pajak = $this->harga * 0.025;
        } 
        return $pajak;
    }

    function jadwal() {
        if ($this->platNo = "Genap" ) {
            return "Selasa, Kamis, Sabtu";
        } else {
            return "Senin, Rabu, Jumat";
        }
    }
}


$kendaraan1 = new Kendaraan();


echo "Status Harga: " . $kendaraan1->StatusHarga() . "<br>";
echo "Subsidi: " . $kendaraan1->subsidi() . "<br>";
echo "Harga Bekas: " . $kendaraan1->Hargabekas() . "<br>";
echo "Pajak: " . $kendaraan1->pajak() . "<br>";
echo "Jadwal: " . $kendaraan1->jadwal() . "<br>";

?>
