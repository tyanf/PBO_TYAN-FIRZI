<?php
class perulangan{
    public function loop() {
        $array = array ('subang','bandung','jakarta','surabaya','yogyakarta');
        foreach ($array as $key) {
            echo $key."<br/>";
        }
        
    }
}
$objekPengulangan = new perulangan();
echo "nama nama kot di pulau jawa : "."<br/>";
echo $objekPengulangan->loop()."<br/>";
?>