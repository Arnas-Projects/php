<?php

echo '<body style="background-color: #444; color: white; font-family: monospace; font-size: 24px; line-height: 1.5;">';


//////////////////////////////////////////////////////////////////////////////////////////////////
/*
    8 užduotis

    Sukurkite masyvą iš 10 elementų. 
    
    Masyvo reikšmes užpildykite pagal taisyklę: 
    generuokite skaičių nuo 0 iki 5. 
    
    Ir sukurkite tokio ilgio masyvą. 
    
    Jeigu reikšmė yra 0 masyvo nekurkite. 
    
    Antro lygio masyvo reikšmes užpildykite 
    atsitiktiniais skaičiais nuo 0 iki 10. 
    
    Ten kur masyvo nekūrėte reikšmę nuo 
    0 iki 10 įrašykite tiesiogiai.
*/
echo '<hr>8 užduotis<hr>';

echo '<pre>';

// ----------------------------------------------------------------------
// Kuriam naują tuščią masyvą
$arr = [];

// Sukuriam kintamąjį su random reikšme
$arrLength = rand(0, 5);

echo "Random reikšmė: $arrLength <br>";

// Sukuriame 'for' ciklą, kuris kuria tokio ilgio masyvą kokia iškrenta random reikšmė
for ($i = 0; $i < $arrLength; $i++) {
    $arr[] = [];

    $innerLength = rand(1, 10);

    for ($j = 0; $j < $innerLength; $j++) {
        $arr[$i][] = rand(0, 10);
    }
}

// Jei random reikšmė iškrito 0, sunaikinam masyvą
if ($arrLength === 0) {
    unset($arr);
}

// Jei masyvas egzistuoja (jei jame yra reikšmių), jį atspausdinam, jei reikšmių masyve nėra, masyvo nespausdinam
if (isset($arr)) {
    print_r($arr);
} else {
    echo 'Masyvas nesukurtas, nes reikšmė 0 <br>';
}


echo '<br><br>';


//////////////////////////////////////////////////////////////////////////////////////////////////
/*
    9 užduotis

    Paskaičiuokite 8 uždavinio masyvo visų reikšmių 
    sumą ir išrūšiuokite masyvą taip, kad pirmiausiai 
    eitų mažiausios masyvo reikšmės arba jeigu 
    reikšmė yra masyvas, to masyvo reikšmių sumos.
*/
echo '<hr>9 užduotis<hr>';

$suma = 0;

if (isset($arr)) {

    foreach ($arr as $subArr) {

        foreach ($subArr as $value) {
            $suma += $value;
        }
    }
}

echo "Suma: $suma <br><br>";


if (isset($arr)) {

    usort($arr, function ($a, $b) {

        $valueA = is_array($a) ? array_sum($a) : $a;
        $valueB = is_array($b) ? array_sum($b) : $b;

        return $valueA <=> $valueB;
    });
}

print_r($arr);
