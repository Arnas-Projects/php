<?php

echo '<body style="background-color: #444; color: white; font-size: 24px; line-height: 1.5;">';

//////////////////////////////////////////////////////////////////////////////////////////////////
// 1 užduotis
echo '<hr>1 užduotis<hr>';

$masyvasA = [];

for ($i = 0; $i < 30; $i++) {
    $masyvasA[] = rand(5, 25); // php array push analogas
};

echo '<pre>';

print_r($masyvasA);

echo '<br>';


//////////////////////////////////////////////////////////////////////////////////////////////////
// 2 užduotis - b)
echo '<hr>2 užduotis b)<hr><br>';

$maxValue = $masyvasA[0]; // pridedam palyginimui 1 reikšmę
$maxIndexes = [];

/*
    Šito uždavinio, back-end'o sprendimo užduotis
    
    Kas tai galėtų būti?
    Reikia parodyti komentarus, turinčius daugiausiai "laikų"
*/

foreach ($masyvasA as $index => $value) {

    if ($value > $maxValue) {
        $maxValue = $value; // nauja didžiausia reikšmė
        $maxIndexes = [];
    }

    if ($value == $maxValue) {
        $maxIndexes[] = $index;
    }

    // jeigu mažesnė, tai nieko nedarom
};

echo "Max reikšmė: $maxValue <br>";
print_r($maxIndexes);

echo '<br>';


//////////////////////////////////////////////////////////////////////////////////////////////////
// 2 užduotis - c)
echo '<hr>2 užduotis c)<hr><br>';

$indexValuesSum = 0;

foreach ($masyvasA as $index => $value) {
    
    if ($index % 2 === 0) { // visos falsey reikšmės yra "pavojingos" ir geriau jas lyginti su ===
        $indexValuesSum += $value;
    }

};

echo "Suma: $indexValuesSum";

echo '<br><br>';

//////////////////////////////////////////////////////////////////////////////////////////////////
// 2 užduotis - d)
echo '<hr>2 užduotis d)<hr><br>';