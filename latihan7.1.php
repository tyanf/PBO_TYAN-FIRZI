<?php
class Manusia { // class induk
    // property class manusia
    public $nama_saya;

    // method pada class manusia
    function berinama($saya) {
        $this->nama_saya = $saya;
    }
}

// class turunan atau sub class dari class manusia
class Teman extends Manusia {
    // property class teman
    public $nama_teman;

    // method pada class teman
    function berinamateman($teman) {
        $this->nama_teman = $teman;
    }
}

// instansiasi class teman
$objectTeman = new Teman;

$objectTeman->berinama("Dika");
$objectTeman->berinamateman("Andra");

// menampilkan isi property
echo "Nama Saya: " . $objectTeman->nama_saya . "<br/>";
echo "Nama Teman Saya: " . $objectTeman->nama_teman; 
?>
