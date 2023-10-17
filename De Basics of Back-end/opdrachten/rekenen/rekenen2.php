<?php
$getal = 6;
echo "Tafel van $getal:<br>";
function tafel($getal){
    for ($i = 1; $i <= 10; $i++) {
        $result = $i * $getal;
        echo "$i x $getal = $result <br>";
    }
}

tafel($getal);
?>