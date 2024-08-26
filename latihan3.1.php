<?php  
class Kendaraan 
{
    var $jumlahRoda = 4;
    var $warna = "Biru";
    var $bahanBakar = "Premium";
    var $harga = 100000000;
    var $merek = "Nissan"; 
    var $tahunPembuatan = 2004;

    function statusHarga()
    {
        if ($this->harga > 50000000) {
            return "Harga Kendaraan Mahal"; 
        } else {
            return "Harga Kendaraan Murah"; 
        }
    }

    function statusSubsidi()
    {
        if ($this->tahunPembuatan < 2005 && $this->bahanBakar == "Premium") {
            return "DAPAT SUBSIDI";
        } else {
            return "TIDAK DAPAT SUBSIDI";
        }
    }
}


$ObjekKendaraan = new Kendaraan(); 


echo "Jumlah Roda: " . $ObjekKendaraan->jumlahRoda . "<br />"; 
echo "Status Harga: " . $ObjekKendaraan->statusHarga() . "<br />";
echo "Merek :" . $ObjekKendaraan->merek . "<br />";
echo "Warna :" . $ObjekKendaraan->warna . "<br />";
echo "Status Subsidi: " . $ObjekKendaraan->statusSubsidi(); 
?>

