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








echo '<pre>';

//////////////////////////////////////////////////////////////////////////////////////////////////
/*
    4 užduotis
    
    Išrūšiuokite 3 uždavinio masyvą pagal abecėlę.
*/
echo '<hr>4 užduotis<hr><br>';















//////////////////////////////////////////////////////////////////////////////////////////////////
/*
    5 užduotis
    
    Sugeneruokite 3 masyvus pagal 3 uždavinio sąlygą. 
    
    Sudėkite masyvus, sudėdami atitinkamas reikšmes. 
    
    Paskaičiuokite kiek unikalių (po vieną, nesikartojančių) 
    reikšmių ir kiek unikalių kombinacijų gavote.
*/
echo '<hr>5 užduotis<hr><br>';















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
    6 uždavinio masyvo reikšmės, o jo reikšmės iš būtų 
    antrojo masyvo.
*/
echo '<hr>9 užduotis<hr><br>';



















//////////////////////////////////////////////////////////////////////////////////////////////////
/*
    10 užduotis
    
    Sugeneruokite 10 skaičių masyvą pagal taisyklę: 
    Du pirmi skaičiai - atsitiktiniai nuo 5 iki 25. 
    
    Trečias - pirmo ir antro suma. 
    
    Ketvirtas - antro ir trečio suma. 
    
    Penktas - trečio ir ketvirto suma ir t.t.
*/
echo '<hr>10 užduotis<hr><br>';
