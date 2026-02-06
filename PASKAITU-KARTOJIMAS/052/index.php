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

echo '<br>';

$zmogus = [
    'vardas' => 'Jeronimas',
    'auto' => 'Cadillac',
    'amzius' => 55
];

print_r($zmogus);

echo '<br>';

// reikia sukurti masyvą, kuriame būtų 10 reikšmių 0, 2, 4, 6... 18

$arr = [];

for ($i = 0; $i <= 18; $i += 2) {
    $arr[] = $i;
};

print_r($arr);
echo '<br>';


// Dėstytojo sprendimas
$arr2 = [];

for ($i = 0; $i < 10; $i++) {
    $arr2[] = $i * 2;
};

print_r($arr2);
echo '<hr><br>';

// ----------------------------------------

echo 'FOREACH <br><br>';

// foreach su reikšme
foreach ($zmogus as $value) {
    echo $value . '<br>';
};

echo '<br>';

// foreach su indeksu ir reikšme
foreach ($zmogus as $index => $value) {
    echo $index . ': ' . $value . '<br>';
};

echo '<br>';


$masyvas123 = range(1, 5); // padaro masyvą

print_r($masyvas123);

foreach ($masyvas123 as $i) {
    echo $i . '<br>';
}


echo '<br>';

$arrRange = range('a', 'z');

print_r($arrRange);

foreach ($arrRange as $i) {
    echo $i . '<br>';
}

// pagal reikšmę ir pagal nuorodą

echo '<br>--------------<br>';

$m1 = [1, 2, 3];
$m2 = $m1; // perdavimas pagal reikšmę

$m1[] = 4;

print_r($m1);
print_r($m2);


echo '<br>--------------<br>';

$m3 = [1, 2, 3];
$m4 = &$m3; // perdavimas pagal nuorodą

$m3[] = 4;

print_r($m3);
print_r($m4);


echo '<br>--------------<br>';

$colors = ['Red', 'Green', 'Blue', 'Yellow'];

foreach ($colors as &$color) {}; // $color yra perduodamas pagal nuorodą (by reference)

// reikėtų nepamiršti panaudotą, nebereikalingą nuorodą "užmušt"

unset($color); // unset --> panaikina nuorodą

foreach ($colors as $color) { // $color yra perduodamas pagal reikšmę (by value)
    echo $color . '<br>';
};


echo '<br>--------------<br>';

$fun = function ($element) {
    return $element . ' ***';
};

$naujasZmogus = array_map($fun, $zmogus);

print_r($naujasZmogus);