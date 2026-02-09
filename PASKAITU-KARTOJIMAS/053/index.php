<?php

echo '<body style="background-color: #444; color: white; font-size: 24px; line-height: 1.5;">';



$stringas = 'Labas, Žasinai? Ar tau jau 12 metų? Šernai, ką tu? Kiek bus 54 + 87';

$re = '/(.{2})(\d{2}).+?/m';

$result = preg_match_all($re, $stringas, $matches); // $matches ---> per nuorodą (reference) gaunamas rezultatas

echo '<pre>';

var_dump($result); // nurodo atitikimų skaičių

print_r($matches);

echo '<hr><br>';


///////////////////////////////////////////////////////////////////////////////////////////////////////////////
// FUNKCIJOS
echo '======== FUNKCIJOS ========<br><br>';


$vardas = 'Kristupas Kolumbas';

// Funkcija PHP yra tarsi burbulas, į kurį kintamieji nepatenka ir iš jo neišeina

function demo()
{
    echo 'demo function';
    $kintamasisFunkcijoj = 102;
}

demo();

echo '<br>' . $kintamasisFunkcijoj;

echo '<hr>';


// SENAS!! Blogos architektūros pvz:

function blogas_Pvz()
{
    global $vardas, $kintamasisFunkcijoj; // tai yra blogas pvz.

    echo 'demo function ' . $vardas;
    $kintamasisFunkcijoj = 102;
}

blogas_Pvz();

echo '<br>' . $kintamasisFunkcijoj;

echo '<br>-----------------------<br><br>';


// ----------------------------------------------------------
function vidutinis_Pvz($vardasA, &$kintamasisFunkcijojA)
{
    echo 'Ką tu? ' . $vardasA;
    $kintamasisFunkcijojA = 102;
}

vidutinis_Pvz($vardas, $kintamasisFunkcijoj);

echo '<br>' . $kintamasisFunkcijoj;