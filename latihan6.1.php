<?php
class perulangan {
    public function looping()
    {
        for ($x = 1; $x <= 10; $x++)
        {
            echo $x . "<br/>";
        }
    }
}


$perulangan = new perulangan();
$perulangan->looping();
?>
