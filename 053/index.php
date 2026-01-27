<?php

$backgroundColor = '#444';
$textColor = 'white';
echo "<body style='background-color: $backgroundColor; color: $textColor; font-size: 24px; line-height: 1.5;
margin: 0 35px; margin-top: 25px; column-gap: 50px; column-fill: auto;
'>";



$masyvasA = [];

for ($i = 0; $i < 30; $i++) {
    $masyvasA[] = rand(5, 25); // php push analogas
};

echo '<pre>';

print_r($masyvasA);

$maxValue = $masyvasA[0]; // pridedam palyginimui pirmą reikšmę
$maxIndexes = [];


/*
    Kas tai galėtų būti?
    Reikia parodyti komentarus, turinčius daugiausiai "laikų"
*/


foreach($masyvasA as $index => $value) {

    if ($value > $maxValue) {
        $maxValue = $value; // nauja didžiausia reikšmė
        $maxIndexes = [];
    }

    if ($value == $maxValue) {
        $maxIndexes[] = $index;
    }

    // jeigu mažesnė tai nieko nedarom

};

echo '<br><br>';

echo 'Max: ' . $maxValue . '<br>';
print_r($maxIndexes);


// --------------------------------------------------

$indexValuesSum = 0;

foreach ($masyvasA as $index => $value) {

    if ($index % 2 === 0) { // visos falsey reikšmės yra "pavojingos" ir geriau jas lyginti su ===
        $indexValuesSum += $value;
    }

};

echo '<br>';

echo 'SUM: ' . $indexValuesSum . '<br>';

echo '<br>';

$stringas = 'Labas, Žąsinas. Ar tau jau 12 metų? Šernai, ką tu? Kiek bus 54 + 87';

$re = '/.{2}(\d{2}).+?/m';

$result = preg_match_all($re, $stringas, $matches); // $matches per nuorodą (by reference) gaunamas rezultatas

echo '<br>';

var_dump($result); // nurodo atitikimų skaičių

print_r($matches);


////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////
// FUNKCIJOS


$vardas = 'Kristupas Kolumbas';

// Funkcija PHP yra tarsi burbulas į kurį kintamieji nepatenka ir iš jo neišeina

// Deklaracija
function kaTu() {

    echo '<br>Ką tu? '; //. $vardas;
    $kintamasFunkcijoje = 102;

};

// Kvietimas
kaTu();

echo '<br>' . $kintamasFunkcijoje;

echo '<br><hr>';

// ---------------------------------------------------------------------------------

// SENAS!!! Blogos architektūros pvz:

function kaTu__BLOGA() {

    global $vardas, $kintamasFunkcijoje; // tai yra BLOGAI!

    echo '<br>Ką tu? ' . $vardas;
    $kintamasFunkcijoje = 102;

};

kaTu__BLOGA();

echo '<br>' . $kintamasFunkcijoje;

echo '<br><hr><br>';

// ---------------------------------------------------------------------------------

function kaTu__Normalus($vardasA, &$kintamasFunkcijojeA) {

    echo '<br>Ką tu? ' . $vardasA;
    $kintamasFunkcijojeA = 102;

}

kaTu__Normalus($vardas, $kintamasFunkcijoje);

echo '<br>' . $kintamasFunkcijoje;
