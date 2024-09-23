<?php
class Perulangan {
    public function loop1() {
        $output = "";
        for ($baris = 1; $baris <= 8; $baris++) {
            for ($kolom = 1; $kolom <= $baris; $kolom++) {
                $output .= "*" . "&nbsp;";
            }
            $output .= "<br/>";
        }
        return $output;
    }

    public function loop2() {
        $output = "";
        for ($baris = 1; $baris <= 6; $baris++) {
            for ($kolom = 1; $kolom <= $baris; $kolom++) {
                $output .= "*" . "&nbsp;";
            }
            $output .= "<br/>";
        }
        return $output;
    }
}

$objekPengulangan = new Perulangan();
echo "Jenis Perulangan 1" . "<br/>";
echo $objekPengulangan->loop1() . "<br/>";
echo "Jenis Perulangan 2" . "<br/>";
echo $objekPengulangan->loop2() . "<br/>";
?>
