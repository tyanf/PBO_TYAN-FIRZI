class mobil 
{
    var $jumlahRoda=4;
    var $warna="merah";
    var $bahanBakar="Pertamax";
    var $harga=1200000000;
    var $merk="a";
}

public function statusharga()
{
    if ($this->harga > 500000000) $status = "mahal";
    else $status = "murah";
    retrun $status;
}