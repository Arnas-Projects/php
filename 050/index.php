<?php

// privatus komentaras


/*
    Dokumentinis
    Kelių eilučių komentaras
*/


# specialios paskirtines komentaras atributams


$stringas = 'Labas, Bebrai';

$skaicius = 2024;

$skaicius = $skaicius + 10;
$skaicius += 10; // tas pats, kitaip užrašyta

// echo $skaicius;

$kitasStringas = ' Ką tu veiki?';

$galutinisStringas = $stringas . $kitasStringas;

echo $galutinisStringas;

$stringasSuMetais1 = 'Metai: ' . $skaicius; // kabutės viengubos
$stringasSuMetais2 = "Metai: $skaicius"; // kabutės dvigubos
$stringasSuMetais3 = 'Metai: $skaicius'; // viengubose kabutėse kintamieji neįvertinami
$stringasSuMetais4 = "Metai: " . $skaicius; // <-- Taip rašyti negalima

echo '<br>';
echo $stringasSuMetais1;
echo '<br>';
echo $stringasSuMetais2;
echo '<br>';
echo $stringasSuMetais3;

$laikinas = 'Temporary text';

echo '<br>', '<br>';
echo $laikinas;
unset($laikinas); // ištrina kintamąjį
echo $laikinas;

echo '<br>', '<br>';
echo 'Viršuje buvo bandoma atspausdinti ištrintą kintamąjį. Tai nėra kritinė klaida. Kodas toliau vyksta.';


// 'Indiškas būdas' paslėpti klaidą
echo '<br>', '<br>';
echo @$laikinas; // klaidos neatspausdins, bet kintamasis vis tiek neegzistuoja


// Kintamųjų tipai: string, integer (sveikas skaičius), float, boolean, array, object, null

// string
$kintamasis1 = 'Tai yra stringas';

// integer (sveikas skaičius)
$kintamasis2 = 2024;
$kintasis2minusas = -2024;
$kintamasis2binarinis = 0b11111100100; // binary = 2024
$kintamasis2oktalinis = 02410; // octal = 2024
$kintamasis2heksadecimalinis = 0x7E4; // hexadecimal = 2024

// float
$kintamasis3 = 3.14;

// boolean
$kintamasis4 = true;
$kintamasis4false = false;

// array
$kintamasis5 = ['vienas', 'du', 'trys', 5, true, 'žąsis', null]; // indeksuotas masyvas // Masyvas php'e NĖRA objektas
$kintamasis5taspats = ['vienas', 'du', 'trys'];

echo '<br>';

echo $kintamasis5 == $kintamasis5taspats ? 'Masyvai lygūs' : 'Masyvai nelygūs'; // tikrinima ar masyvai lygūs
// masyvas yra lygus, nes PHP'e tai nėra objektai

echo '<br>';

echo $kintamasis5;

echo '<pre><br>';
print_r($kintamasis5);
echo '</pre><br>';


// kitas būdas atspausdinti masyvo turini
echo '<br><pre>';
var_dump($kintamasis5); // atspausdina masyvo turini su tipais
echo '</pre><br>';



echo '<br>';

// object
$kintamasis6 = new stdClass(); // JS analogas {}
$kintamasis7kitas = (object)[]; // kitas būdas sukurti tuščią objektą

// null

$kintamasis7 = null;

// $ kintamasis
// $$ kintamasis - kintamojo kintamasis;
// $$$ kintamasis = kintamojo kintamojo kintamasis

$vardas = 'Jonas';
$$vardas = 'Petras'; // sukuriamas kintamasis $Jonas

// $+$vardas ==> $Jonas

echo '<br>';
echo $vardas; // isveda 'Jonas'
echo '<br>';
echo $Jonas; // isveda 'Petras'


// KINTAMUJU KONSTANTOS
// aprašomos naudojant define() funkciją arba const raktažodį
define('KONSTANTA1', 'Tai yra konstanta su define()');
const KONSTANTA2 = 'Tai yra konstanta su const raktažodžiu';
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

echo '<br>';

// php nustatinės konstantos
echo '<br>';
echo PHP_VERSION; // php versija
echo '<br>';
echo PHP_INT_MAX; // didžiausias integer skaičius
echo '<br>';
echo PHP_FLOAT_MAX; // didžiausias float skaičius
echo '<br>';
echo PHP_OS; // operacinė sistema

echo '<br>', '<br>';

// KINTAMŲJŲ TIPŲ KEITIMAS
$kintamasisTipas = '1234'; // string
echo gettype($kintamasisTipas); // išveda kintamojo tipą
echo '<br>', '<br>';

var_dump("1" == "01"); // true, nes lygina reikšmes
// kaip lygina '1' == '01'
// 1. abu stringai parverčiami į integer tipus '1' -> 1 , 1 '01' yra aštuntainės skaičiavimo sistemos
// 2. lyginamos reikšmės 1 == 1
echo '<br>';
var_dump('1' === '01'); // false, nes lygina ir tipus
// kaip lygina '1' === '01'
// 1. abu stringai lieka stringais

// php galima nustatyti strict_types, kad būtų griežtai lyginami tipai
// taip daroma failo viršuje, prieš <?php žymą
// delcare(strict_types=1);

echo '<br>', '<br>';

//Jonas ir Petras žaidžiai šaškėm. Petras surenka taškų kiekį nuo 10 iki 20, 
// Jonas surenka taškų kiekį nuo 5 iki 25. 

// Išvesti žaidėjų vardus su taškų kiekiu ir
//“Laimėjo: laimėtojo vardas”;

//Taškų kiekį generuokite funkcija rand();

$Jonukas = 'Jonukas wins';
$Petriukas = 'Petriukas wins';

$jTaskai = rand(10, 20);
$pTaskai = rand(5, 25);

if ($jTaskai > $pTaskai) {
    echo $Jonukas;
    echo '<br>';
    echo "Jonuko taškai: $jTaskai";
    echo '<br>';
    echo "Petriuko taškai: $pTaskai";
} else if ($jTaskai < $pTaskai) {
    echo $Petriukas;
    echo '<br>';
    echo "Jonuko taškai: $jTaskai";
    echo '<br>';
    echo "Petriuko taškai: $pTaskai";
} else {
    echo 'DRAW!';
    echo '<br>';
    echo "Jonuko taškai: $jTaskai";
    echo '<br>';
    echo "Petriuko taškai: $pTaskai";
}


// Dėstytojo variantas ----------------------------

$petrasTaskai = rand(10, 20);
$jonasTaskai = rand(5, 25);
echo '<br><hr><br>';
echo "Petras surinko: $petrasTaskai taškų. <br>";
echo "Jonas surinko: $jonasTaskai taškų. <br>";
if ($petrasTaskai > $jonasTaskai) {
    echo 'Laimėjo: Petras';
} elseif ($jonasTaskai > $petrasTaskai) {
    echo 'Laimėjo: Jonas';
} else {
    echo 'Lygiosios!';
}

echo '<br><hr><br>';

// Priskiriamoji sąlyga

$vienas = 1;
$rezultatas = 1 == $vienas ? 'Yes' : 'No'; // $rezultatas yra 'Yes'
echo $rezultatas;
echo '<br>';
$rezultatas = 3 == $vienas ? 'Yes' : 'No'; // $rezultas yra 'No'
echo $rezultatas;
echo '<br><hr><br>';

// Priskiriamoji sąlyga su priskiriamąja sąlyga viduje
$kintamasis = 5;
$rezultatas = $kintamasis < 3 ? 'Mažiau nei 3' : ($kintamasis > 7 ? 'Daugiau nei 7' : 'Nuo 3 iki 7'); // $rezultatas yra 'Nuo 3 iki 7'

echo $rezultatas;
echo '<br><hr><br>';

// priskyrimas su match operatoriumi (PHP 8.0+)

$kintamasisMatch = 3;
$rezultatasMatch = match ($kintamasisMatch) {
    1 => 'Viena',
    2 => 'Du',
    3 => 'Trys',
    default => 'Kitas skaičius',
};
echo $rezultatasMatch;
echo '<br><hr><br>';
