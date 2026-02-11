<?php

echo '<body style="background-color: #444; color: white; font-size: 24px; line-height: 1.5;">';


//////////////////////////////////////////////////////////////////////////////////////////////////
/*
    1 užduotis
    
    Sukurti du kintamuosius. Jiems priskirti savo mylimo 
    aktoriaus vardą ir pavardę kaip stringus 
    (Jonas Jonaitis). 
    
    Atspausdinti trumpesnį stringą.
*/
echo '<hr>1 užduotis<hr><br>';

$var1 = 'Christian Bale';
$var2 = 'Gary Oldman';

$result = (strlen($var1) < strlen($var2)) ? $var1 : $var2;

echo "Pirmas aktorius: $var1 <br>";
echo "Antras aktorius: $var2 <br> <br>";

echo "Trumpesnis tekstas: $result";









//////////////////////////////////////////////////////////////////////////////////////////////////
/*
    2 užduotis
    
    Sukurti du kintamuosius. Jiems priskirti savo mylimo 
    aktoriaus vardą ir pavardę kaip stringus. 
    
    Vardą atspausdinti tik didžiosiom raidėm, 
    o pavardę tik mažosioms.

*/
echo '<hr>2 užduotis<hr><br>';


$actor1 = 'Cillian Murphy';
$actor2 = 'Gary Oldman';

// Aktorius #1 - vardo keitimas
$keiciamVardaAktoriui1 = preg_replace_callback('/^[A-z]+/', function ($keitimas)
{
    return strtoupper($keitimas[0]);
}, $actor1);

// Aktorius #1 - pavardės keitimas (su jau pakeistu vardu)
$galutinisAktorius1 = preg_replace_callback('/[A-z]+$/', function($keitimas)
{
    return strtolower($keitimas[0]);
}, $keiciamVardaAktoriui1);


// Aktorius #2 - vardo keitimas
$keiciamVardaAktoriui2 = preg_replace_callback('/^[A-z]+/', function ($keitimas)
{
    return strtoupper($keitimas[0]);
}, $actor2);

// Aktorius #2 - pavardės keitimas (su jau pakeistu vardu)
$galutinisAktorius2 = preg_replace_callback('/[A-z]+$/', function($keitimas)
{
    return strtolower($keitimas[0]);
}, $keiciamVardaAktoriui2);


echo $galutinisAktorius1;
echo '<br>';
echo $galutinisAktorius2;

echo '<br><br>';


// ALTERNATYVA

$actor1 = 'Christian Bale';
$actor2 = 'Will Smith';

$splitActor1 = explode(' ', $actor1);
$splitActor2 = explode(' ', $actor2);

$splittedNameActor1 = strtoupper($splitActor1[0]);
$splittedSurnameActor1 = strtolower($splitActor1[1]);

$splittedNameActor2 = strtoupper($splitActor2[0]);
$splittedSurnameActor2 = strtolower($splitActor2[1]);

echo $splittedNameActor1 . ' ' . $splittedSurnameActor1;
echo '<br>';
echo $splittedNameActor2 . ' ' . $splittedSurnameActor2;


//////////////////////////////////////////////////////////////////////////////////////////////////
/*
    3 užduotis
    
    Sukurti du kintamuosius. Jiems priskirti savo mylimo 
    aktoriaus vardą ir pavardę kaip stringus. 
    
    Sukurti trečią kintamąjį ir jam priskirti stringą, 
    sudarytą iš pirmų vardo ir pavardės kintamųjų raidžių. 
    
    Jį atspausdinti.

*/
echo '<hr>3 užduotis<hr><br>';








