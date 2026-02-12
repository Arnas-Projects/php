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

$movie = '"An American in Paris"';

$kiekA = 0;

for ($i = 0; $i < strlen($movie); $i++) {
    if ($movie[$i] == 'A' || $movie[$i] == 'a') {
        $kiekA++;
    }
}

echo "$movie <br><br>";
echo "Kiek 'A' ir a' raidžių: $kiekA";


echo '<br><br>';


// ALTERNATYVA (AI)

$movie = '"An American in Paris"';

$kiekA = substr_count(strtolower($movie), 'a');

echo "$movie <br><br>";
echo "Kiek 'A' ir 'a' raidžių: $kiekA";

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

$movie1 = '"An American in Paris"';

$deletedLetters1 = str_replace(['A', 'E', 'I', 'Y', 'O', 'U', 'a', 'e', 'i', 'y', 'o', 'u'], '', $movie1);

echo "$movie1 <br>";
echo 'Updated movie name: ' . $deletedLetters1 . '<br><br>';


$movie2 = '"Breakfast at Tiffany\'s"';
$movie3 = '"2001: A Space Odyssey"';
$movie4 = '"It\'s a Wonderful Life"';

$deletedLetters2 = str_replace(['A', 'E', 'I', 'Y', 'O', 'U', 'a', 'e', 'i', 'y', 'o', 'u'], '', $movie2);
$deletedLetters3 = str_replace(['A', 'E', 'I', 'Y', 'O', 'U', 'a', 'e', 'i', 'y', 'o', 'u'], '', $movie3);
$deletedLetters4 = str_replace(['A', 'E', 'I', 'Y', 'O', 'U', 'a', 'e', 'i', 'y', 'o', 'u'], '', $movie4);

echo "$movie2 <br>";
echo "Updated movie name: $deletedLetters2 <br><br>";

echo "$movie3 <br>";
echo "Updated movie name: $deletedLetters3 <br><br>";

echo "$movie4 <br>";
echo "Updated movie name: $deletedLetters4";

echo '<br><br><br>';


// ALTERNATYVA (AI)
echo 'ALTERNATYVUS SPRENDIMAS: <br><br>';

function istrintiRaides($text)
{
    $raides = ['a', 'e', 'i', 'y', 'o', 'u'];
    return str_ireplace($raides, '', $text);
}

$movies = [
    "An American in Paris",
    "Breakfast at Tiffany's",
    "2001: A Space Odyssey",
    "It's a Wonderful Life"
];

foreach ($movies as $movie) {
    echo "Movie: $movie <br>";
    echo 'Updated movie name: ' . istrintiRaides($movie) . '<br><br>';
}


//////////////////////////////////////////////////////////////////////////////////////////////////
/*
    8 užduotis
    
    Stringe, kurį generuoja toks kodas: 
    'Star Wars: Episode '. str_repeat(' ', rand(0,5)) . rand(1,9) . ' - A New Hope'; 
    
    Surasti ir atspausdinti epizodo numerį.
*/
echo '<hr>8 užduotis<hr><br>';

$code = 'Star Wars: Episode ' . str_repeat(' ', rand(0,5)) . rand(1,9) . ' - A New Hope';

echo $code;

$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9];

foreach ($numbers as $number) {

    for ($i = 0; $i < strlen($code); $i++) {
        
        if ($code[$i] == $number) {
            $target = $number;
        }
    }
}

echo '<br>';
echo "Epizodo nr: $target";

echo '<br><br>';


// ALTERNATYVA

$code = 'Star Wars: Episode ' . str_repeat(' ', rand(0,5)) . rand(1,9) . ' - A New Hope';

echo $code . '<br>';

$target = '';

for ($i = 0; $i < strlen($code); $i++) {

    if (is_numeric($code[$i])) {
        $target = $code[$i];
        break;
    }
}

echo "Epizodo nr: $target";
echo '<br><br>';


//////////////////////////////////////////////////////////////////////////////////////////////////
/*
    9 užduotis
    
    Suskaičiuoti kiek stringe “Don't Be a Menace to 
    South Central While Drinking Your Juice in the Hood” 
    yra žodžių trumpesnių arba lygių nei 5 raidės. 
    
    Pakartokite kodą su stringu “Tik nereikia gąsdinti 
    Pietų Centro, geriant sultis pas save kvartale”.
*/
echo '<hr>9 užduotis<hr><br>';

$movie = 'Don\'t Be a Menace to South Central While Drinking Your Juice in the Hood';

echo "$movie <br>";

$trinamSimbolius = preg_replace('/[^\p{L}\s]/', '', $movie);

$split = explode(' ', $trinamSimbolius);

$suma = 0;

foreach ($split as $value) {

    if (mb_strlen($value) <= 5) {
        $suma++;
    }
}

echo "Suma: $suma";

echo '<br><br>';


$movieLt = 'Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale';

echo "$movieLt <br>";

$trinamSimbolius2 = preg_replace('/[^\p{L}\s]/', '', $movieLt);

$split2 = explode(' ', $trinamSimbolius2);

$suma2 = 0;

foreach ($split2 as $value) {

    if (mb_strlen($value) <= 5) {
        $suma2++;
    }
}

echo "Suma: $suma2";
echo '<br><br>';


//////////////////////////////////////////////////////////////////////////////////////////////////
/*
    10 užduotis
    
    Parašyti kodą, kuris generuotų atsitiktinį stringą 
    iš lotyniškų mažųjų raidžių. 
    
    Stringo ilgis 3 simboliai.
*/
echo '<hr>10 užduotis<hr><br>';

$raides = range('a', 'z');

$zodis = array_rand($raides, 3);
$result = $raides[$zodis[0]] . $raides[$zodis[1]] . $raides[$zodis[2]];

echo $result;

echo '<br><br>';


// ALTERNATYVA

$raides = range('a', 'z');
$result = '';

for ($i = 0; $i < 3; $i++) {

    $index = rand(0, 25);
    $result .= $raides[$index];
}

echo $result;