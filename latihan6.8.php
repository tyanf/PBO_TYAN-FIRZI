<?php
for ($i = 1; $i <= 10; $i++) {
    for ($j = $i; $j <= 10; $j++) {
        echo '&nbsp;'; 
    }
    for ($j = 1; $j <= $i; $j++) {
        echo " * ";
    }
    echo '<br/>';
}
?>