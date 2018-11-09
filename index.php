<?php

$hallo = "hallo";

$lenght = strlen($hallo);

for($i = 0; $i < $lenght; $i++) {
    if ($i % 2 == 0) {
        $halloCijfers = ord($hallo[$i]);
        $nieuwHalloCijfers = $halloCijfers + $i;
//        echo $nieuwHalloCijfers . '<br>';
        echo chr($nieuwHalloCijfers) . '<br>';
//        echo 'even' . '<br>';
    } else {
        $halloCijfers = ord($hallo[$i]);
        $nieuwHalloCijfers = $halloCijfers - $i;
//        echo $nieuwHalloCijfers . '<br>';
        echo chr($nieuwHalloCijfers) . '<br>';
//        echo 'oneven' . '<br>';
    }
}