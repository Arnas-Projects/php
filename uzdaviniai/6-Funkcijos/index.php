<?php

echo '<body style="background-color: #444; color: white; font-size: 24px; line-height: 1.5;">';


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

echo $var;
echo '<br><br>';
















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

echo '<pre>';
print_r($masyvas);
echo '</pre>';