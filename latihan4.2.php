<?php //membuat class

class Kendaraan {
    private $merek;
    private $jmlRoda;
    private $harga;
    private $warna;
    private $bahanBakar;
    private $tahun;

    public function setMerek($merek) {
        $this->merek = $merek;
    }

    public function setJmlRoda($jmlRoda) {
        $this->jmlRoda = $jmlRoda;
    }

    public function setHarga($harga) {
        $this->harga = $harga;
    }

    public function setWarna($warna) {
        $this->warna = $warna;
    }

    public function setBahanBakar($bahanBakar) {
        $this->bahanBakar = $bahanBakar;
    }

    public function setTahun($tahun) {
        $this->tahun = $tahun;
    }

    public function getMerek() {
        return $this->merek;
    }

    public function getJmlRoda() {
        return $this->jmlRoda;
    }

    public function getHarga() {
        return $this->harga;
    }

    public function getWarna() {
        return $this->warna;
    }

    public function getBahanBakar() {
        return $this->bahanBakar;
    }

    public function getTahun() {
        return $this->tahun;
    }
}

// Membuat objek kendaraan
$kendaraan1 = new Kendaraan();
$kendaraan1->setMerek("Toyota Yaris");
$kendaraan1->setJmlRoda(4);
$kendaraan1->setHarga(160000000);
$kendaraan1->setWarna("Merah");
$kendaraan1->setBahanBakar("Premium");
$kendaraan1->setTahun(2005);

// Menampilkan informasi kendaraan 1
echo "Merek: " . $kendaraan1->getMerek() . "<br>";
echo "Jumlah Roda: " . $kendaraan1->getJmlRoda() . "<br>";
echo "Harga: " . $kendaraan1->getHarga() . "<br>";
echo "Warna: " . $kendaraan1->getWarna() . "<br>";
echo "Bahan Bakar: " . $kendaraan1->getBahanBakar() . "<br>";
echo "Tahun: " . $kendaraan1->getTahun() . "<br>";

// Membuat objek kendaraan lain
$kendaraan2 = new Kendaraan();
$kendaraan2->setMerek("Honda Scoopy");
$kendaraan2->setJmlRoda(2);
$kendaraan2->setHarga(13000000);
$kendaraan2->setWarna("Putih");
$kendaraan2->setBahanBakar("Premium");
$kendaraan2->setTahun(2004);

// Menampilkan informasi kendaraan 2
echo "<br>Merek: " . $kendaraan2->getMerek() . "<br>";
echo "Jumlah Roda: " . $kendaraan2->getJmlRoda() . "<br>";
echo "Harga: " . $kendaraan2->getHarga() . "<br>";
echo "Warna: " . $kendaraan2->getWarna() . "<br>";
echo "Bahan Bakar: " . $kendaraan2->getBahanBakar() . "<br>";
echo "Tahun: " . $kendaraan2->getTahun() . "<br>";

// Membuat objek kendaraan lain
$kendaraan3 = new Kendaraan();
$kendaraan3->setMerek("Isuzu Panther");
$kendaraan3->setJmlRoda(4);
$kendaraan3->setHarga(170000000);
$kendaraan3->setWarna("Hitam");
$kendaraan3->setBahanBakar("Solar");
$kendaraan3->setTahun(2003);

// Menampilkan informasi kendaraan 3
echo "<br>Merek: " . $kendaraan3->getMerek() . "<br>";
echo "Jumlah Roda: " . $kendaraan3->getJmlRoda() . "<br>";
echo "Harga: " . $kendaraan3->getHarga() . "<br>";
echo "Warna: " . $kendaraan3->getWarna() . "<br>";
echo "Bahan Bakar: " . $kendaraan3->getBahanBakar() . "<br>";
echo "Tahun: " . $kendaraan3->getTahun() . "<br>";
?>