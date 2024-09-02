<?php
class Kuis
{
    var $Nama;
    var $Kelas;
    var $Matkul;
    var $Nilai;
    

 
     function setNama($Nama) {
        $this->Nama= $Nama;
    }
   function getNama() {
        return $this->Nama;
    }

     function setKelas($Kelas) {
        $this->Kelas = $Kelas;
    }
 
     function getKelas() {
        return $this->Kelas;
    }
     function setMatkul($Matkul) {
        $this->Matkul = $Matkul;
    }
 
    function getMatkul() {
        return $this->Matkul;
    }
     function setNilai($Nilai) {
        $this->Nilai = $Nilai;
    }
   function getNilai() {
        return $this->Nilai;
    }

 
    
 
     function lulusAtauTidak() {
        if ($this->Nilai < 60) {
            return 'TIDAK LULUS KUIS';
        } else {
            return 'LULUS KUIS';
        }
    }
 
    
}
 
 
$Data1 = array('Aditya', 'SI 2', 'Pemograman Berorientasi Objek', 80);
$Data2 = array('Shinta', 'SI 2', 'Pemograman Berorientasi Objek', 75);
$Data3 = array('Ineu', 'SI 2', 'Pemograman Berorientasi Objek', 55);
 
for ($i = 1; $i <= 3; $i++) {
for ($h = 0; $h <= 3; $h++){     
    ${"Kuis$i"} = new Kuis();
    ${"Kuis$i"}->setNama(${"Data$i"}[0]);
    ${"Kuis$i"}->setKelas(${"Data$i"}[1]);
    ${"Kuis$i"}->setMatkul(${"Data$i"}[2]);
    ${"Kuis$i"}->setNilai(${"Data$i"}[3]);
    
}
}
 
for ($i = 1; $i <= 3; $i++) {
    echo "Mahasiswa $i<br>";
   echo "Nama : " . ${"Kuis$i"}->getNama() . "<br>";
   echo "Kelas : " . ${"Kuis$i"}->getKelas() . "<br>";
   echo "Mata Kuliah : " . ${"Kuis$i"}->getMAtkul() . "<br>";
   echo "Nilai :" . ${"Kuis$i"}->getNilai() . "<br>";
   echo  ${"Kuis$i"}->lulusAtauTidak() . "<br><br>";
}
?>
