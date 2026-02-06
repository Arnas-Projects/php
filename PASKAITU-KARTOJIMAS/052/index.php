<?php

echo '<body style="background-color: #444; color: white; font-size: 24px; line-height: 1.5;">';

// CIKLAI

echo 'FOR', '<br>';

for ($i = 0; $i < 5; $i++) {
    echo $i . '<br>';
};

echo '<hr><br>';


echo 'WHILE', '<br>';

$i = 0;
while ($i < 5) {
    echo $i++ . '<br>';
};

echo '<hr><br>';


echo 'DO WHILE', '<br>';

$i = 0;
do {
    echo $i . '<br>';
    $i++;
} while ($i < 5);

echo '<hr><br>';


echo 'FOR in FOR', '<br>';

for ($i = 0; $i < 5; $i++) {
    echo 'I: ' . $i . '<br>';

    for ($j = 0; $j < 5; $j++) {

        if ($j == 2) {
            // continue; // nutraukia mažo ciklo iteraciją
            continue 2; // nutraukia mažą ciklą ir didžiojo ciklo iteraciją
        }

        echo '----J: ' . $j . '<br>';
        // break; // mažo ciklo nutraukimas
        // break 2; // mažo ir tėvinio ciklo nutraukimas

    }

    // break; // didelio ciklo nutraukimas

};

echo '<hr><br>';

// JOKE Tikri PHP programeriai nenaudoja FOR ciklo :)

//////////////////////////////////////////////////////////////////////////////////////////////////////////

// MASYVAI

$masyvas1 = []; // tuščias masyvas

$masyvas2 = array(); // senovinis būdas užrašyti masyvui. Nerašyti taip.

echo '<pre>';

print_r($masyvas1);

$masyvas3 = [
    5,
    8,
    'Bebras',
    5 => 'Barsukas',
    0
];

// 5 yra indeksas => tada reikšmė

// sekantis elementas yra didžiausias indeksas +1

// indeksas 3 nedingo
$masyvas3[3] = 55;

print_r($masyvas3);

$masyvas4 = [
    4,
    8 => 'Bebras',
    'Barsukas',
    'labas' => 55,
    'Briedis'
];

// overwritina seną indekso reikšmę
$masyvas4['labas'] = 107;

$masyvas4['14'] = 107; // jeigu indeksą galima paversti skaičiumi, tai PHP jį ir pavers skaičiumi
$masyvas4[14] = 108;

$masyvas4[] = 222; // push į masyvą, indeksas bus max +1

print_r($masyvas4);