<?php

echo '<body style="background-color: #444; color: white; font-family: monospace; font-size: 24px; line-height: 1.5;">';


//////////////////////////////////////////////////////////////////////////////////////////////////
/*
    3 užduotis

    Sukurkite masyvą iš 10 elementų. 
    
    Kiekvienas masyvo elementas turi būti masyvas 
    su atsitiktiniu kiekiu nuo 2 iki 20 elementų. 
    
    Elementų reikšmės atsitiktinai parinktos raidės 
    iš intervalo A-Z. Išrūšiuokite antro lygio 
    masyvus pagal abėcėlę (t.y. tuos kur su raidėm).
*/
echo '<hr>3 užduotis<hr>';

$arr = [];
$raides = range('A', 'Z');

for ($i = 0; $i < 10; $i++) {

    for ($j = 0; $j < rand(2, 20); $j++) {
        $arr[$i][] = $raides[array_rand($raides)];
    }
}

echo '<pre>';
print_r($arr);

// Rūšiuojam pagal ABC
echo '<br> Išrūšiuotas masyvas pagal ABC: <br>';


foreach ($arr as &$subArr) {
    usort($subArr, fn($a, $b) => $a <=> $b);
}

unset($subArr);

print_r($arr);


echo '<br><br>';


//////////////////////////////////////////////////////////////////////////////////////////////////
/*
    4 užduotis

    Išrūšiuokite trečio uždavinio pirmo lygio 
    masyvą taip, kad elementai kurių masyvai 
    trumpiausi eitų pradžioje. 
    
    Masyvai kurie turi bent vieną “K” raidę, 
    visada būtų didžiojo masyvo visai pradžioje.
*/
echo '<hr>4 užduotis<hr>';

usort($arr, function ($a, $b) {

    $raideK_A = in_array('K', $a);
    $raideK_B = in_array('K', $b);

    if ($raideK_A && !$raideK_B) {
        return -1;
    }

    if (!$raideK_A && $raideK_B) {
        return 1;
    }

    return count($a) <=> count($b);
});

print_r($arr);


echo '<br><br>';