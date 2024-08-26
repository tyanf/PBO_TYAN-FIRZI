<?php
class PenghitungBesarAngsuran
{
    var $JumlahPinjaman = 1000000;
    var $bunga = 0.1;
    var $besaranAngsuran = 220000;
    var $totalpinjam = 1100000;
    var $waktuterlambat = 40;
    var $dendaTerlambat = 0.15;
    
    var $lamaAngsuran = 5;

   


    function besaranpinjaman()
    {
         return ($this ->JumlahPinjaman * $this ->bunga) + $this ->JumlahPinjaman;
    }

     function besarangsuran()
    {
        return $this->besaranpinjaman() / $this -> lamaAngsuran;
    }
    function dendaAngsuran()
    {
        return $this ->besarangsuran() * $this ->dendaTerlambat * $this ->waktuterlambat;
    }
    
       
    

}
$ObjekPegadaian = new PenghitungBesarAngsuran();
echo ("TOKO PEGADAIAN SYARIAH") . "<br />";
echo ("Jl Keadilan No 16") . "<br />";
echo ("Telp. 72353459") . "<br />" . "<br />";
echo "Program Penghitung Besaran Angsuran Hutang" . "<br />";
echo "Besaran Pinjaman : Rp.1000.000" . "<br/>";
echo "Besar Bunga : 10%" . "<br />";
echo "Total Pinjaman :" . $ObjekPegadaian ->besaranpinjaman() . "<br />";
echo "Lama Angsuran (Bulan ) : 5" . "<br />";
echo "Besaran Angsuran : " . $ObjekPegadaian ->besarangsuran() . "<br />";
echo "Denda Yang Harus Di Bayar :" . $ObjekPegadaian->dendaAngsuran();

?>