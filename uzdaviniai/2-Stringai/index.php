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


// Hardcoded variantas - nelabai geras
$var1 = 'Nicholas Cage';
$var2 = 'Hugh Jackman';

$result = $var1[0] . ' ' . $var1[9] . ' ' . $var2[0] . ' ' . $var2[5];

echo "$var1 <br>";
echo "$var2 <br><br>";
echo "Išfiltruotos raidės: $result";

echo '<br><br>';


// ALTERNATYVA

$var1 = 'Al Pacino';
$var2 = 'Joe Pesci';

$split1 = explode(' ', $var1);
$split2 = explode(' ', $var2);

$inicialai1 = $split1[0][0] . ' ' . $split1[1][0];
$inicialai2 = $split2[0][0] . ' ' . $split2[1][0];

echo "$var1 <br>";
echo "$var2 <br><br>";

echo "1-o aktoriaus inicialai: $inicialai1";
echo '<br>';
echo "2-o aktoriaus inicialai: $inicialai2";
echo '<br><br>';


//////////////////////////////////////////////////////////////////////////////////////////////////
/*
    4 užduotis
    
    Sukurti du kintamuosius. Jiems priskirti savo mylimo 
    aktoriaus vardą ir pavardę kaip stringus. 
    
    Sukurti trečią kintamąjį ir jam priskirti stringą, 
    sudarytą iš trijų paskutinių vardo ir pavardės 
    kintamųjų raidžių. 
    
    Jį atspausdinti.
*/
echo '<hr>4 užduotis<hr><br>';

$var1 = 'Arnold Schwarzenegger';
$var2 = 'Dolph Lundgren';

$split1 = explode(' ', $var1);
$split2 = explode(' ', $var2);

$subVar1 = substr($split1[0], -3) . ' ' . substr($split1[1], -3);
$subVar2 = substr($split2[0], -3) . ' ' . substr($split2[1], -3);

echo "$var1 <br>";
echo "$var2 <br><br>";

echo "Filtered letters No.1: $subVar1";
echo '<br>';
echo "Filtered letters No.2: $subVar2";


//////////////////////////////////////////////////////////////////////////////////////////////////
/*
    5 užduotis
    
    Sukurti kintamąjį su stringu: “An American in Paris”. 
    
    Jame visas “a” (didžiąsias ir mažąsias) pakeisti 
    žvaigždutėm “*”.  
    
    Rezultatą atspausdinti.
*/
echo '<hr>5 užduotis<hr><br>';


$movie = '"An American in Paris"';

echo $movie . '<br>';

$updatedMovieName = str_replace('A', '*', $movie);
$updatedMovieName2 = str_replace('a', '*', $updatedMovieName);

echo "Updated movie name: $updatedMovieName2";

echo '<br><br>';


// ALTERNATYVA (protingų smegenų pasiūlytas variantas)

$movie = '"An American in Paris"';

$updatedMovieName = str_replace(['A', 'a'], '*', $movie);

echo "$movie <br>";
echo "Updated movie name PART2: $updatedMovieName";

echo '<br><br>';


//////////////////////////////////////////////////////////////////////////////////////////////////
/*
    6 užduotis
    
    Sukurti kintamąjį su stringu: “An American in Paris”. 
    Suskaičiuoti visas “a” (didžiąsias ir mažąsias) raides. 
    Rezultatą atspausdinti.
*/
echo '<hr>6 užduotis<hr><br>';










echo '<br><br>';


//////////////////////////////////////////////////////////////////////////////////////////////////
/*
    7 užduotis
    
    Sukurti kintamąjį su stringu: “An American in Paris”. 
    
    Jame ištrinti visas balses. 
    
    Rezultatą atspausdinti. 
    
    Kodą pakartoti su stringais: “Breakfast at Tiffany's”, 
    “2001: A Space Odyssey” ir “It's a Wonderful Life”.
*/
echo '<hr>7 užduotis<hr><br>';



