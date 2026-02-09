<?php

echo '<body style="background-color: #444; color: white; font-size: 24px; line-height: 1.5;">';

//////////////////////////////////////////////////////////////////////////////////////////////////
/*
    1 užduotis

    Sugeneruokite masyvą iš 30 elementų (indeksai nuo 0 iki 29), 
    kurių reikšmės yra atsitiktiniai skaičiai nuo 5 iki 25.
*/
echo '<hr>1 užduotis<hr>';

$masyvasA = [];

for ($i = 0; $i < 30; $i++) {
    $masyvasA[] = rand(5, 25); // php array push analogas
};

echo '<pre>';

print_r($masyvasA);

echo '<br>';


//////////////////////////////////////////////////////////////////////////////////////////////////
/*
    2 užduotis - b)

    Raskite didžiausią masyvo reikšmę ir jos 
    indeksą arba indeksus jeigu yra keli;
*/
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
/*
    2 užduotis - c)
    
    Suskaičiuokite visų porinių (lyginių) indeksų 
    reikšmių sumą;
*/

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
/*
    2 užduotis - d)
    
    Sukurkite naują masyvą, kurio reikšmės yra 
    1 uždavinio masyvo reikšmes minus tos reikšmės indeksas;
*/
echo '<hr>2 užduotis d)<hr><br>';

$newArray = [];

foreach ($masyvasA as $index => $value) {

    $newArray[] = $value - $index;
}

print_r($newArray);



//////////////////////////////////////////////////////////////////////////////////////////////////
/*
    2 užduotis - e)
    
    Papildykite masyvą papildomais 10 elementų su reikšmėmis 
    nuo 5 iki 25, kad bendras masyvas padidėtų iki indekso 39;
*/
echo '<hr>2 užduotis e)<hr><br>';

// ALTERNATYVA

// $limitIndex = 39;

// foreach ($newArray as $index => $value) {

//     if (count($newArray) > $limitIndex) {
//         break;
//     }

//     $newArray[] = rand(5, 25);
// }

// print_r($newArray);


for ($i = 0; $i < 10; $i++) {
    $newArray[] = rand(5, 25);
}

print_r($newArray);



//////////////////////////////////////////////////////////////////////////////////////////////////
/*
    2 užduotis - f)
    
    Iš masyvo elementų sukurkite du naujus masyvus. 
    
    Vienas turi būti sudarytas iš neporinių indekso 
    reikšmių, o kitas iš porinių;
*/
echo '<hr>2 užduotis f)<hr><br>';

$porinisMasyvas = [];
$neporinisMasyvas = [];

foreach ($newArray as $index => $value) {
    if ($index % 2 === 0) {
        $porinisMasyvas[] = $value;
    } else {
        $neporinisMasyvas[] = $value;
    }
}

echo 'Porinis masyvas: <br>';
print_r($porinisMasyvas);

echo '<br>';

echo 'Neporinis masyvas: <br>';
print_r($neporinisMasyvas);


//////////////////////////////////////////////////////////////////////////////////////////////////
/*
    2 užduotis - g)
    
    Pirminio masyvo elementus su poriniais indeksais 
    padarykite lygius 0 jeigu jie didesni už 15;
*/
echo '<hr>2 užduotis g)<hr><br>';

foreach ($masyvasA as $index => $value) {

    if ($index % 2 === 0 && $value > 15) {
        $masyvasA[$index] = 0;
    }
}

print_r($masyvasA);



//////////////////////////////////////////////////////////////////////////////////////////////////
/*
    2 užduotis - h)
    
    Suraskite pirmą (mažiausią) indeksą, 
    kurio elemento reikšmė didesnė už 10;
*/
echo '<hr>2 užduotis h)<hr><br>';

$foundIndex = -1;
$foundValue = $masyvasA[0];

foreach ($masyvasA as $index => $value) {
    
    if ($value > 10) {
        $foundIndex = $index;
        $foundValue = $value;
        break;
    }
}

echo "Indeksas: $foundIndex | Reikšmė: $foundValue";

echo '<br><br>';



//////////////////////////////////////////////////////////////////////////////////////////////////
/*
    2 užduotis - i)
    
    Naudodami funkciją unset() iš masyvo ištrinkite 
    visus elementus turinčius porinį indeksą;
*/
echo '<hr>2 užduotis i)<hr><br>';

foreach ($masyvasA as $index => $value) {

    if ($index % 2 === 0) {
        unset($masyvasA[$index]);
    }
}


$masyvasA = array_values($masyvasA); // su array_values vėl gražiai sutvarkau indeksus, kad eitų iš eilės. Padeda, jei ateity reikia dar ciklinti masyvą

print_r($masyvasA);

