<?php

$didelisMasyvas = [];

for ($i = 0; $i < 5; $i++) {
    
    $mazoMasyvoIlgis = rand(0, 10); // nurodo, kiek mažam masyve bus elementų

    $didelisMasyvas[$i] = [];

    for ($j = 0; $j < $mazoMasyvoIlgis - 1; $j++) {

        $didelisMasyvas[$i][$j] = rand(10, 99);

    };

};

echo '<pre>';

print_r($didelisMasyvas);

echo '<br><br>';


$dideleSuma = 0;

foreach ($didelisMasyvas as $valueDidelis) {

    foreach ($valueDidelis as $valueMazas) {
        $dideleSuma += $valueMazas;
    };

};

echo 'Suma: ' . $dideleSuma;
echo '<br><hr><br>';


usort($didelisMasyvas, 'rusiuoklis');

function rusiuoklis($a, $b) {

    return count($a) <=> count($b);

};

print_r($didelisMasyvas);
