<?php

echo '<body style="background-color: #444; color: white; font-size: 24px; line-height: 1.5;">';


$jonas = rand(5, 10);
$petras = rand(5, 10);

echo "Jonas: $jonas <br>";
echo "Petras: $petras <br><br>";

if ($jonas == $petras) {
    echo 'Lygu';
} else if ($jonas > $petras) {
    echo 'Jonas laimėjo';
} else {
    echo 'Petras laimėjo';
}