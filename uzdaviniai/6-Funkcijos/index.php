<?php

use Ramsey\Uuid\Type\Integer;

echo '<body style="background-color: #444; color: white; font-family: monospace; font-size: 24px; line-height: 1.5;">';


//////////////////////////////////////////////////////////////////////////////////////////////////
/*
    1 užduotis
    
    Parašykite funkciją, kurios argumentas būtų tekstas, 
    kuris yra įterpiamas į h1 tagą;
*/
echo '<hr>1 užduotis<hr><br>';

function h1TagoFunkcija(&$tekstas)
{
    $tekstas = '<h1>Čia yra labai svarbus argumentas.</h1>';
    echo $tekstas;
}

h1TagoFunkcija($kvieciam);


//////////////////////////////////////////////////////////////////////////////////////////////////
/*
    2 užduotis
    
    Parašykite funkciją su dviem argumentais, 
    pirmas argumentas tekstas, įterpiamas į h tagą, 
    o antrasis tago numeris (1-6). 
    
    Rašydami šią funkciją remkitės pirmame uždavinyje 
    parašyta funkcija;
*/
echo '<hr>2 užduotis<hr><br>';


$tekstas = "Bebras sugraužė mano namų darbus";

function kuriamTagus($tekstasA, &$randomNum)
{
    $randomNum = rand(1, 6);

    echo "<h$randomNum>$tekstasA</h$randomNum>";

    echo "Šiuo metu h tago nr: $randomNum";
}

kuriamTagus($tekstas, $tagoNr);


//////////////////////////////////////////////////////////////////////////////////////////////////
/*
    3 užduotis
    
    Generuokite atsitiktinį stringą, pasinaudodami kodu md5(time()). 
    
    Visus skaitmenis stringe įdėkite į h1 tagą. 
    
    Raides palikite. Jeigu iš eilės eina keli skaitmenys, 
    juos į tagą reikią dėti kartu (h1 atsidaro prieš 
    pirmą ir užsidaro po paskutinio) 
    
    Keitimui naudokite pirmo patobulintą (jeigu reikia) 
    uždavinio funkciją ir preg_replace_callback();
*/
echo '<hr>3 užduotis<hr><br>';

$var = md5(time());

// echo "Random stringas: $var";
// echo '<br><br>';

// function filtravimas($tekstas)
// {
//     return preg_replace_callback('/[0-9]+/', function($keitimas)
//     {
//         return '<h1>' . $keitimas[0] . '</h1>';
//     }, $tekstas);
// }

// echo filtravimas($var);


//////////////////////////////////////////////////////////////////////////////////////////////////
/*
    4 užduotis
    
    Parašykite funkciją, kuri skaičiuotų, iš kiek sveikų 
    skaičių jos argumentas dalijasi be liekanos 
    (išskyrus vienetą ir patį save) 
    
    Argumentą užrašykite taip, kad būtų galima 
    įvesti tik sveiką skaičių;
*/
echo '<hr>4 užduotis<hr><br>';


function skaiciuokle($argumentas)
{
    if (!is_int($argumentas)) {
        echo "Klaida: šita reikšmė -> $argumentas <- nėra sveikas skaičius <br><br>";
        return;
    }

    $kiekis = 0;

    for ($daliklis = 2; $daliklis < $argumentas; $daliklis++) {
        if ($argumentas % $daliklis === 0) {
            $kiekis++;
        }
    }

    return $kiekis;
}

$testNumber = 24.88;
$result = skaiciuokle($testNumber);

echo "Skaičius: $testNumber <br><br>";
echo "Galimų daliklių kiekis: $result";

if ($result === null) {
    echo "nėra daliklių, nes $testNumber nėra sveikasis skaičius";
}

echo '<br><br>';


//////////////////////////////////////////////////////////////////////////////////////////////////
/*
    5 užduotis
    
    Sugeneruokite masyvą iš 100 elementų, kurio reikšmės 
    atsitiktiniai skaičiai nuo 33 iki 77. 
    
    Išrūšiuokite masyvą pagal daliklių be liekanos 
    kiekį mažėjimo tvarka, panaudodami ketvirto 
    uždavinio funkciją.
*/
echo '<hr>5 užduotis<hr><br>';

$masyvas = [];

for ($i = 0; $i < 100; $i++) {
    $masyvas[] = rand(33, 77);
}

// We use usort to define our custom rules
usort($masyvas, function($a, $b) {
    
    // 1. Calculate divisors for both numbers using your function
    $kiekisA = skaiciuokle($a);
    $kiekisB = skaiciuokle($b);

    // 2. Compare them for Descending order:
    // If B has more divisors, return a positive number (moves A down)
    // If A has more divisors, return a negative number (moves A up)
    return $kiekisB <=> $kiekisA;
});

// echo '<pre>';

foreach ($masyvas as $value) {
    echo $value . ' -> dalikliai: ' . skaiciuokle($value) . '<br>';
}


// echo '</pre>';



//////////////////////////////////////////////////////////////////////////////////////////////////
/*
    4 užduotis
    
    Parašykite funkciją, kuri skaičiuotų, iš kiek sveikų 
    skaičių jos argumentas dalijasi be liekanos 
    (išskyrus vienetą ir patį save) 
    
    Argumentą užrašykite taip, kad būtų galima 
    įvesti tik sveiką skaičių;
*/
echo '<hr>4 užduotis - SU DĖSTYTOJU<hr><br>';

// declare(strict_type=1);


function kiekBeLiekanos(int $skaicius) : int
{
    $rezultatas = 0;

    for ($i = 1; $i <= $skaicius; $i++) {
        if ($skaicius % $i === 0) {
            $rezultatas++;
        }
    }

    return $rezultatas;
}

echo kiekBeLiekanos(6.3);

echo '<br><br>';

/*
    5 užduotis
    
    Sugeneruokite masyvą iš 100 elementų, kurio reikšmės 
    atsitiktiniai skaičiai nuo 33 iki 77. 
    
    Išrūšiuokite masyvą pagal daliklių be liekanos 
    kiekį mažėjimo tvarka, panaudodami ketvirto 
    uždavinio funkciją.
*/
echo '<hr>5 užduotis SU DESTYTOJU<hr><br>';

$masyvas = [];

foreach(range(1, 100) as $_) {

    $masyvas[] = rand(33, 77);
}

echo '<pre><br>';

print_r($masyvas);

usort($masyvas, function ($a, $b) {
    return kiekBeLiekanos($b) <=> kiekBeLiekanos($a);
});

print_r($masyvas);

// foreach ($masyvas as $index => $num) {
//     $divisors = kiekBeliekanos($num);
//     echo "$num, $divisors<br>";
// }