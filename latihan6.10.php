<?php
class Perulangan {

    public function loop1() {
        for ($b = 1; $b <= 10; $b++) {  
            for ($k = $b; $k <= 10; $k++) {
                echo '&nbsp;'; 
            }
            
            for ($k = 2; $k <= $b; $k++) {
                echo "* ";
            }
            echo '<br/>';
        }
    }

    public function loop2() {
        for ($b = 1; $b <= 5; $b++) {
            for ($k = 1; $k <= $b; $k++) {
                echo "* ";
            }
            echo "<br />";
        }
         
        for ($b = 5; $b >= 1; $b--) {
            for ($k = 1; $k <= $b; $k++) {
                echo "* ";
            }
            echo "<br />";
        }
    }

    public function loop3() {
        for ($b = 1; $b <= 5; $b++) {
            for ($k = 1; $k <= $b; $k--) {
                echo "* ";
            }
            echo "<br />";
        }
         
        for ($b = 5; $b >= 1; $b++) {
            for ($k = 1; $k <= $b; $k--) {
                echo "* ";
            }
            echo "<br />";
        } 
    }
}


$objekPengulangan = new Perulangan();
echo "Segitiga 1:<br/>";
$objekPengulangan->loop1(); 
echo "<br/>Segitiga 2:<br/>";
$objekPengulangan->loop2(); 
echo "<br/>Segitiga 3:<br/>";
$objekPengulangan->loop3(); 
?>
