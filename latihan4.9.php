<?php
class Kendaraan
{
    var $Merek;
    var $jmlroda;
    var $Harga;
    var $warna;
    var $bhnbakar;
    var $tahun;
 
     function setMerek($Merek) {
        $this->Merek = $Merek;
    }
 
     function setjmlroda($jmlroda) {
        $this->jmlroda = $jmlroda;
    }
 
     function setHarga($Harga) {
        $this->Harga = $Harga;
    }
 
     function setwarna($warna) {
        $this->warna = $warna;
    }
 
     function setbhnbakar($bhnbakar) {
        $this->bhnbakar = $bhnbakar;
    }
 
    function settahun($tahun) {
        $this->tahun = $tahun;
    }
 
    function getMerek() {
        return $this->Merek;
    }
 
     function getjmlroda() {
        return $this->jmlroda;
    }
 
    function getHarga() {
        return $this->Harga;
    }
 
     function getWarna() {
        return $this->warna;
    }
 
     function getBhnBakar() {
        return $this->bhnbakar;
    }
 
     function getTahun() {
        return $this->tahun;
    }
 
     function statusHarga() {
        if ($this->Harga > 50000000) {
            return 'Harga Tinggi';
        } else {
            return 'Harga Terjangkau';
        }
    }
 
     function dapatSubsidi() {
        if ($this->tahun < 2005) {
            return 'Berhak subsidi';
        } else {
            return 'Tidak berhak subsidi';
        }
    }
 
     function hargaSecondKendaraan() {
        return $this->Harga * 0.6;
    }
}
 
 
$Data1 = array('Toyota Yaris', '4', '160000000', 'Merah', 'Pertamax', '2014');
$Data2 = array('Honda Scoopy', '2', '13000000', 'Putih', 'Premium', '2005');
$Data3 = array('Isuzu Panther', '4', '40000000', 'Hitam', 'Solar', '1994');
 
for ($i = 1; $i <= 3; $i++) {
    ${"kendaraan$i"} = new Kendaraan();
    ${"kendaraan$i"}->setMerek(${"Data$i"}[0]);
    ${"kendaraan$i"}->setjmlroda(${"Data$i"}[1]);
    ${"kendaraan$i"}->setHarga(${"Data$i"}[2]);
    ${"kendaraan$i"}->setwarna(${"Data$i"}[3]);
    ${"kendaraan$i"}->setbhnbakar(${"Data$i"}[4]);
    ${"kendaraan$i"}->settahun(${"Data$i"}[5]);
}
 
for ($i = 1; $i <= 3; $i++) {
    echo "Kendaraan $i<br>"
    . ${"kendaraan$i"}->getMerek() . "<br>"
    . ${"kendaraan$i"}->getjmlroda() . "<br>"
    . ${"kendaraan$i"}->getHarga() . "<br>"
    . ${"kendaraan$i"}->getWarna() . "<br>"
    . ${"kendaraan$i"}->getBhnBakar() . "<br>"
    . ${"kendaraan$i"}->getTahun() . "<br>"
    . ${"kendaraan$i"}->statusHarga() . "<br>"
    . ${"kendaraan$i"}->dapatSubsidi() . "<br>"
    . ${"kendaraan$i"}->hargaSecondKendaraan() . "<br><br>";
}
?>
 
 