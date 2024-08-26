<?php
class Kendaraan
{
    var $jumlahRoda = 4;
    var $warna;
    var $bahanBakar = "Premium";
    var $harga = 350000000;
    var $merek;
    var $status;
    var $tahunPembuatan = 2004;

    function StatusHarga()
    {
        if ($this->harga > 500000000) {
            $status = "Mahal";
        } else {
            $status = "Murah";
        }
        return $status;
    }

    function StatusSubsidi()
    {
        if ($this->tahunPembuatan < 2005 && $this->bahanBakar == "Premium") {
            $status = "DAPAT SUBSIDI";
        } else {
            $status = "TIDAK DAPAT SUBSIDI"; 
        }
        return $status;
    }
        
    function hargaSecondKendaraan()
    {
        return $this->harga * 0.5;
    }
}

// Objek 1
$ObjekKendaraan1 = new Kendaraan();
$ObjekKendaraan1->harga = 1000000;
$ObjekKendaraan1->tahunPembuatan = 1999;

// Pemanggilan method
echo "Status Harga: " . $ObjekKendaraan1->StatusHarga();

// Objek 2
$ObjekKendaraan2 = new Kendaraan();
$ObjekKendaraan2->bahanBakar = "Pertamax";
$ObjekKendaraan2->tahunPembuatan = 1998;

// Pemanggilan method
echo "<br />";
echo "Status BBM: " . $ObjekKendaraan2->StatusSubsidi();
echo "<br />";
echo "Harga Bekas: " . $ObjekKendaraan2->hargaSecondKendaraan();
?>
