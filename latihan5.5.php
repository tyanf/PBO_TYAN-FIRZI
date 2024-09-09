<?php
class diskon {
    var $pembeli;
    var $kartuMember;
    var $totalBelanja;
    var $diskon;
    var $totalbayar;

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
            

         
    

                               
    function hitungTotalBayar() {
        $this->totalBayar = $this->totalBelanja - $this->diskon;
    }

    function getDiskon() {
        return $this->diskon;
    }

    function getTotalBayar() {
        return $this->totalBayar;
    }


}
$pembeli1 = new Diskon();
$pembeli1->setMember("Ya", 600000);

echo "Diskon: " . $pembeli1->getDiskon() . "<br>";
echo "Total Bayar: " . $pembeli1->getTotalBayar() . "<br>";





?>