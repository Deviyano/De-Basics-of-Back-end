<?php
    $tafels = array(3, 5, 8, 12);
    foreach ($tafels as $tafel) {
        echo "Tafel van $tafel:<br>";
        for ($i = 1; $i <= 10; $i++) {
            $result = $i * $tafel;
            echo "$i x $tafel = $result <br>";
        }
    echo "<br>";
    }
?>