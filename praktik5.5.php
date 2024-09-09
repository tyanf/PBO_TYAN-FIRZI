<?php

class Diskon
{
    var $pembeli;
    var $kartuMember;
    var $totalBelanja;
    var $diskon;
    var $totalBayar;

    // Setter untuk kartu member dan total belanja
    function setMember($kartuMember, $totalBelanja) {
        $this->kartuMember = $kartuMember;
        $this->totalBelanja = $totalBelanja;
        $this->hitungDiskon(); // Hitung diskon saat setter dipanggil
        $this->hitungTotalBayar(); // Hitung total bayar setelah diskon
    }

    // Menghitung diskon berdasarkan kartu member dan total belanja
    function hitungDiskon() {
        if ($this->kartuMember == "Ya") {
            switch (true) {
                case ($this->totalBelanja >= 570000):
                    $this->diskon = 50000;
                    break;
                case ($this->totalBelanja >= 200000):
                    $this->diskon = 15000;
                    break;
                default:
                    $this->diskon = 0;
                    break;
            }
        } else {
            switch (true) {
                case ($this->totalBelanja >= 120000):
                    $this->diskon = 5000;
                    break;
                default:
                    $this->diskon = 0;
                    break;
            }
        }
    }

    // Menghitung total bayar setelah diskon diterapkan
    function hitungTotalBayar() {
        $this->totalBayar = $this->totalBelanja - $this->diskon;
    }

    // Getter untuk diskon dan total bayar
    function getDiskon() {
        return $this->diskon;
    }

    function getTotalBayar() {
        return $this->totalBayar;
    }

    // Getter untuk status member dan total belanja
    function getStatusMember() {
        return $this->kartuMember;
    }

    function getTotalBelanja() {
        return $this->totalBelanja;
    }
}

// Membuat 4 objek Diskon
$pembeli1 = new Diskon();
$pembeli1->setMember("Ya", 600000);

$pembeli2 = new Diskon();
$pembeli2->setMember("Tidak", 150000);

$pembeli3 = new Diskon();
$pembeli3->setMember("Ya", 300000);

$pembeli4 = new Diskon();
$pembeli4->setMember("Tidak", 100000);

// Menampilkan hasil
function tampilkanInformasiDiskon($pembeli) {
    echo "Status Member: " . $pembeli->getStatusMember() . "<br>";
    echo "Total Belanja: " . $pembeli->getTotalBelanja() . "<br>";
    echo "Diskon: " . $pembeli->getDiskon() . "<br>";
    echo "Total Bayar: " . $pembeli->getTotalBayar() . "<br>";
    echo "<hr>";
}

// Menampilkan informasi untuk setiap pembeli
tampilkanInformasiDiskon($pembeli1);
tampilkanInformasiDiskon($pembeli2);
tampilkanInformasiDiskon($pembeli3);
tampilkanInformasiDiskon($pembeli4);

?>
