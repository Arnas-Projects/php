<?php

echo '<body style="background-color: #444; color: white; font-size: 20px; line-height: 1.5;">';


$bigArray = [];

for ($i = 0; $i < 5; $i++) {

    $bigArray[$i] = [];
    $smallArrayLength = rand(0, 10); // kiek mažam masyve bus elementų

    for ($j = 0; $j < $smallArrayLength - 1; $j++) {
        $bigArray[$i][$j] = rand(10, 99);
    }
};

echo '<pre>';

print_r($bigArray);

$bigSum = 0;

foreach($bigArray as $valueBig) {
    
    foreach ($valueBig as $valueSmall) {
        $bigSum += $valueSmall;
    }
};

echo '<br>';
echo 'SUMA: ' . $bigSum;

echo '<br>------------------<br><br>';

usort($bigArray, 'sorter');


function sorter($a, $b)
{
    return count($a) <=> count($b);
}

print_r($bigArray);