<?php

echo '<body style="background-color: #444; color: white; font-size: 24px; line-height: 1.5;">';



//////////////////////////////////////////////////////////////////////////////////////////////////
/*
    3 užduotis
    
    Sugeneruokite masyvą, kurio reikšmės atsitiktinės 
    raidės A, B, C ir D, o ilgis 200. 
    
    Suskaičiuokite kiek yra kiekvienos raidės.
*/
echo '<hr>3 užduotis<hr><br>';

$raides = range('A', 'D');

$arr = [];

$kiekA = 0;
$kiekB = 0;
$kiekC = 0;
$kiekD = 0;

for ($i = 0; $i < 200; $i++) {

    $vienaRaide = $raides[array_rand($raides)];
    $arr[] = $vienaRaide;

    if ($vienaRaide === 'A') {
        $kiekA++;
    }

    if ($vienaRaide === 'B') {
        $kiekB++;
    }

    if ($vienaRaide === 'C') {
        $kiekC++;
    }

    if ($vienaRaide === 'D') {
        $kiekD++;
    }
};

// $kiekRaidziu = array_count_values($arr);

echo '<pre>';
print_r($arr);
echo '<br>';
// print_r($kiekRaidziu);

echo "Kiek A: $kiekA <br>";
echo "Kiek B: $kiekB <br>";
echo "Kiek C: $kiekC <br>";
echo "Kiek D: $kiekD <br>";

//////////////////////////////////////////////////////////////////////////////////////////////////
/*
    4 užduotis
    
    Išrūšiuokite 3 uždavinio masyvą pagal abėcėlę.
*/
echo '<hr>4 užduotis<hr><br>';

sort($arr);

print_r($arr);

//////////////////////////////////////////////////////////////////////////////////////////////////
/*
    5 užduotis
    
    Sugeneruokite 3 masyvus pagal 3 uždavinio sąlygą. 
    
    Sudėkite masyvus, sudėdami atitinkamas reikšmes. 
    
    Paskaičiuokite kiek unikalių (po vieną, nesikartojančių) 
    reikšmių ir kiek unikalių kombinacijų gavote.
*/
echo '<hr>5 užduotis<hr><br>';


$arr1 = [];
$arr2 = [];
$arr3 = [];


for ($i = 0; $i < 15; $i++) {

    $raide1 = $raides[array_rand($raides)];
    $raide2 = $raides[array_rand($raides)];
    $raide3 = $raides[array_rand($raides)];

    $arr1[] = $raide1;
    $arr2[] = $raide2;
    $arr3[] = $raide3;
}

echo 'Masyvas #1: ';
print_r($arr1);

echo 'Masyvas #2: ';
print_r($arr2);

echo 'Masyvas #3: ';
print_r($arr3);










//////////////////////////////////////////////////////////////////////////////////////////////////
/*
    6 užduotis
    
    Sugeneruokite du masyvus, kurių reikšmės yra atsitiktiniai 
    skaičiai nuo 100 iki 999. 
    
    Masyvų ilgiai 100. 

    Masyvų reikšmės turi būti unikalios savo 
    masyve (t.y. neturi kartotis).

*/
echo '<hr>6 užduotis<hr><br>';

$array1 = [];
$array2 = [];

while (count($array1) < 100) {

    $randomSkaicius = rand(100, 999);

    if (!in_array($randomSkaicius, $array1)) {
        $array1[] = $randomSkaicius;
    }
};


while (count($array2) < 100) {

    $randomSkaicius = rand(100, 999);

    if (!in_array($randomSkaicius, $array2)) {
        $array2[] = $randomSkaicius;
    }
};

print_r($array1);
print_r($array2);


//////////////////////////////////////////////////////////////////////////////////////////////////
/*
    7 užduotis
    
    Sugeneruokite masyvą, kuris būtų sudarytas iš reikšmių, 
    kurios yra pirmame 6 uždavinio masyve, 
    bet nėra antrame 6 uždavinio masyve.
*/
echo '<hr>7 užduotis<hr><br>';

$newArray = [];

foreach ($array1 as $value) {

    if (!in_array($value, $array2)) {
        $newArray[] = $value;
    }
}

print_r($newArray);


//////////////////////////////////////////////////////////////////////////////////////////////////
/*
    8 užduotis
    
    Sugeneruokite masyvą iš elementų, kurie 
    kartojasi abiejuose 6 uždavinio masyvuose.
*/
echo '<hr>8 užduotis<hr><br>';

$newArray = array_intersect($array1, $array2);

// $newArray = array_values($newArray);

print_r($newArray);


// ALTERNATYVA
$newArray = [];

foreach ($array1 as $value) {

    if (in_array($value, $array2)) {
        $newArray[] = $value;
    }
}

print_r($newArray);


//////////////////////////////////////////////////////////////////////////////////////////////////
/*
    9 užduotis
    
    Sugeneruokite masyvą, kurio indeksus sudarytų pirmo 
    6 uždavinio masyvo reikšmės, o jo reikšmės būtų iš 
    antrojo masyvo.
*/
echo '<hr>9 užduotis<hr><br>';

$newArray = [];

foreach ($array1 as $index => $value) {
    $newArray[$value] = $array2[$index];
}

print_r($newArray);