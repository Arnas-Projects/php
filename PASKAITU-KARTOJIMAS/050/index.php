<?php

echo '<body style="background-color: #444; color: white; font-size: 24px; line-height: 1.5;">';

// privatus komentaras

/*
    Dokumentinis
    kelių eilučių komentaras
*/

# specialios paskirties komentaras atributams

$stringas = 'Labas rytas';

$skaicius = 2024;

$skaicius = $skaicius + 10;
$skaicius += 10; // tas pats kaip ir viršuje

$kitasStringas = ' Ką tu veiki?';

$galutinisStringas = $stringas . '.' . $kitasStringas; // sujungia du stringus. Stringus jungiame su tašku .

echo $galutinisStringas;

$stringasSuMetais1 = 'Metai: ' . $skaicius; // viengubos kabutės
$stringasSuMetais2 = "Metai: $skaicius"; // dvigubos kabutės. Viengubose kabutėse kintamieji neįvartinami.
$stringasSuMetais3 = 'Metai: $skaicius'; // viengubos kabutės

echo '<br>';

echo $stringasSuMetais1, '<br>';
echo $stringasSuMetais2, '<br>';
echo $stringasSuMetais3, '<br>';

$laikinas = 'Laikinas kintamasis';

echo $laikinas, '<br>';
unset($laikinas); // ištrinam kintamąjį
echo $laikinas;
echo '<br>';
echo 'Viršuje buvo bandoma atspausdinti ištrintą kintamąjį. Tai yra ne kritinė klaida';
echo '<br>';

// 'Indiškas būdas' paslėpti klaidą
echo @$laikinas; // klaidos neatspausdins, bet kintamasis vis tiek neegzistuoja

// kintamųjų tipai: string, integer, float, boolean, array, object, null

// string
$var1 = 'Tai yra stringas';

// integer 
$var2 = 2024;
$var2minus = -2024;
$var2binarinis = 0b11111100100; // binary = 2024
$var2oktalinis = 02410; // octal = 2024
$var2heksadecimalinis = 0x7E4; // hexadecimal = 2024#

// float
$var3 = 59.8;

// boolean
$tiesa = true;
$melas = false;

// array
$masyvas = [
    'viens',
    'du',
    'trys',
    5,
    true,
    'žąsis',
    null
]; // indeksuotas masyvas

$masyvas2 = [
    'viens',
    'du',
    'trys'
];

echo '<br>';
echo $masyvas == $masyvas2 ? 'Masyvai lygūs' : 'Masyvai nelygūs'; // tikrinam ar masyvai lygūs
// masyvai yra lygūs ne PHP tai ne objektai

echo '<br><pre>'; // <pre> --> preformatuotas tekstas
print_r($masyvas); // atspausdina masyvo turinį
echo '</pre>';

echo '<pre>';
var_dump($masyvas); // atspausdina masyvo turinį
echo '</pre><br>';

// object
$obj = new stdClass(); // JS analogas const obj = {}
$obj2 = (object)[]; // kitas būdas sukurti tuščią objektą

//null
$var4 = null;

// $ kintamasis
// $$ kintamasis - kintamojo kintamasis
// $$$ kintamasis - kintamojo kintamojo kintamasis

$vardas = 'Jonas';
$$vardas = 'Petras'; // sukuriamas kintamasis $Jonas

// $ $vardas ==> $ Jonas

echo '<br>';
echo $vardas; // išveda 'Jonas'
echo '<br>';
echo $Jonas; // išveda 'Petras'

echo '<br><br>';


// KINTAMŲJŲ KONSTANTOS
// aprašomos naudojant define() funkciją arba const raktažodį
define('KONSTANTA1', 'Konstanta su define()');
const KONSTANTA2 = 'Konstanta su const raktažodžiu';
echo '<br>';
echo KONSTANTA1;
echo '<br>';
echo KONSTANTA2;
// KONSTANTOS negali būti keičiamos po aprašymo
// KONSTANTOS rašomos didžiosiomis raidėmis su _ tarp žodžių

// tikrinam ar konstanta yra aprašyta
if (defined('KONSTANTA1')) {
    echo '<br>';
    echo 'KONSTANTA1 yra aprašyta';
} else {
    echo '<br>';
    echo 'KONSTANTA1 nėra aprašyta';
}

// php nustatinės konstantos
echo '<br>';
echo PHP_VERSION; // php versija
echo '<br>';
echo PHP_INT_MAX; // didžiausias integer skaičius
echo '<br>';
echo PHP_FLOAT_MAX; // didžiausias float skaičius
echo '<br>';
echo PHP_OS; // operacinė sistema

echo '<br><br>';

// KINTAMŲJŲ TIPŲ KEITIMAS
$varTipas = '1234'; // string
echo gettype($varTipas); // išveda kintamojo tipą
echo '<br>';

var_dump('1' == '01'); // true, nes lygina reikšmes
// kaip lygina '1' == '01'
// 1. abu stringai parverčiami į integer tipus '1' -> 1 , 1 '01' yra aštuntainės skaičiavimo sistemos išraiška
// 2. lyginamos reikšmės 1 == 1
echo '<br>';

// kaip lygina '1' === '01'
// 1. abu stringai lieka stringais
var_dump('1' === '01'); // false, bes lygina ir tipus

echo '<br><br>';


// php galima nustatyti strict_types, kad būtų griežtai lyginami tipai
// taip daroma failo viršuje, prieš <?php žymą
// declare(strict_types=1);


/* 
    Jonas ir Petras žaidžia šaškėm. Petras surenka taškų kiekį nuo 10 iki 20, 
    Jonas surenka taškų kiekį nuo 5 iki 25.

    Išvesti žaidėjų vardus su taškų kiekiu ir
    “Laimėjo: laimėtojo vardas”;

    Taškų kiekį generuokite funkcija rand();
*/

$jonoTaskai = rand(10, 20);
$petroTaskai = rand(5, 25);

if ($jonoTaskai == $petroTaskai) {
    echo "<h3>Jono taškai: <span>$jonoTaskai</span></h3>";
    echo "<h3>Petro taškai: <span>$petroTaskai</span></h3>";
    echo "<h3>Rezultatas: <span style='color: crimson;'> LYGU </span></h3>";
} else if ($jonoTaskai > $petroTaskai) {
    echo "<h3>Jono taškai: <span>$jonoTaskai</span></h3>";
    echo "<h3>Petro taškai: <span>$petroTaskai</span></h3>";
    echo "<h3>Rezultatas: <span style='color: dodgerblue;'> Jonas WIN </span></h3>";
} else {
    echo "<h3>Jono taškai: <span>$jonoTaskai</span></h3>";
    echo "<h3>Petro taškai: <span>$petroTaskai</span></h3>";
    echo "<h3>Rezultatas: <span style='color: green;'> Petras WIN </span></h3>";
}

echo '<br><br>';

$vienas = 1;
$rezultatas = 1 == $vienas ? 'Yes' : 'No'; // $rezultatas yra 'Yes'
echo $rezultatas, '<br>';

$rezultatas = 3 == $vienas ? 'Yes' : 'No'; // $rezultatas yra 'No'
echo $rezultatas, '<br><hr>';

// Priskiriamoji sąlyga su priskiriamąja sąlyga viduje
$kintamasis = 5;
$rezultatas = $kintamasis < 3 ? 'Mažiau nei 3' : ($kintamasis > 7 ? 'Daugiau nei 7' : 'Nuo 3 iki 7'); // $rezultatas yra 'Nuo 3 iki 7'

echo $rezultatas;
echo '<br><hr><br>';

// Priskiriamoji sąlyga su null coalescing operatoriumi
// $var5 = null;
$result = $var5 ?? 'Kintamasis yra null arba nenurodytas';
echo $result;
echo '<br><hr>';

// Priskyrimas su match operatoriumi (PHP 8.0+)

$kintamasisMatch = 3;
$rezultatasMatch = match ($kintamasisMatch) {
    1 => 'Viena',
    2 => 'Du',
    3 => 'Trys',
    default => 'Kitas skaičius',
};
echo $rezultatasMatch;
echo '<br><hr><br>';