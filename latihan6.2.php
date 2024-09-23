<?php
class perulangan {
    public function loop () {
        for ($i = 15;$i > 0;$i--)
        {
            echo $i;
            echo "<br/>";
        }
    }
}

$objekpengulangan = new perulangan();
echo "Jenis perulangan lainya"."<br/>";
echo $objekpengulangan->loop()."<br/>";
?>