<?php

echo '<body style="background-color: #444; color: white; font-size: 24px; line-height: 1.5;">';


//////////////////////////////////////////////////////////////////////////////////////////////////
/*
    1 užduotis

    Sugeneruokite masyvą iš 10 elementų, kurio elementai 
    būtų masyvai iš 5 elementų su reikšmėmis nuo 5 iki 25.
*/
echo '<hr>1 užduotis<hr>';

$arr = [];

for ($i = 0; $i < 10; $i++) {

    for ($j = 0; $j < 5; $j++) {
        $arr[$i][] = rand(5, 25);
    }
}

echo '<pre>';

print_r($arr);

echo '<br><br>';


//////////////////////////////////////////////////////////////////////////////////////////////////
/*
    2 užduotis - a)

    Naudodamiesi 1 uždavinio masyvu: Suskaičiuokite kiek 
    masyve yra elementų didesnių už 10;
*/
echo '<hr>2 užduotis - a)<hr>';

$suma = 0;

foreach ($arr as $value) {

    foreach ($value as $number) {
        if ($number > 10) {
            $suma++;
        }
    }
}

echo "Suma: $suma";

echo '<br><br>';


//////////////////////////////////////////////////////////////////////////////////////////////////
/*
    2 užduotis - b)

    Raskite didžiausio elemento reikšmę;
*/
echo '<hr>2 užduotis - b)<hr>';

$maxSubArrValue = $arr[0][0];

foreach ($arr as $value) {

    foreach ($value as $number) {

        if ($number > $maxSubArrValue) {
            $maxSubArrValue = $number;
        }
    }
}

echo "Didžiausia reikšmė: $maxSubArrValue";

echo '<br><br>';


//////////////////////////////////////////////////////////////////////////////////////////////////
/*
    2 užduotis - c)

    Suskaičiuokite kiekvieno antro lygio masyvų su 
    vienodais indeksais sumas 
    
    (t.y. suma reikšmių turinčių indeksą 0, 1 ir t.t.)
*/
echo '<hr>2 užduotis - c)<hr>';


// ALT

// foreach ($arr as $subArr) {

//     foreach ($subArr as $index => $value) {

//         // If this is the first time we see this column index, start at 0
//         if (!isset($subArrSum[$index])) {
//             $subArrSum[$index] = 0;
//         }

//         // Add the value to the correct "column bucket"
//         $subArrSum[$index] += $value;
//     }
// }

// print_r($subArrSum);


$sums = [];

foreach ($arr as $subArr) {

    foreach ($subArr as $index => $value) {
        $sums[$index] = ($sums[$index] ?? 0) + $value;
    }
}

print_r($sums);

echo '<br><br>';


//////////////////////////////////////////////////////////////////////////////////////////////////
/*
    2 užduotis - d)

    Visus antro lygio masyvus “pailginkite” iki 7 elementų.
*/
echo '<hr>2 užduotis - d)<hr>';








echo '<br><br>';


//////////////////////////////////////////////////////////////////////////////////////////////////
/*
    2 užduotis - e)

    Suskaičiuokite kiekvieno iš antro lygio masyvų 
    elementų sumą atskirai ir sumas panaudokite 
    kaip reikšmes sukuriant naują masyvą. 
    
    T.y. pirma naujo masyvo reikšmė turi būti lygi 
    mažesnio masyvo, turinčio indeksą 0 dideliame 
    masyve, visų elementų sumai.

*/
echo '<hr>2 užduotis - e)<hr>';
