<?php

echo '<body style="background-color: #444; color: white; font-family: monospace; font-size: 24px; line-height: 1.5;">';


//////////////////////////////////////////////////////////////////////////////////////////////////
/*
    5 užduotis

    Sukurkite masyvą iš 30 elementų. 
    
    Kiekvienas masyvo elementas yra masyvas 
    [user_id => xxx, place_in_row => xxx] 
    user_id atsitiktinis unikalus skaičius 
    nuo 1 iki 1000000, place_in_row atsitiktinis 
    skaičius nuo 0 iki 100. 

*/
echo '<hr>5 užduotis<hr>';

echo '<pre>';

$arr = [];

for ($i = 0; $i < 30; $i++) {

    $user_id = rand(1, 1000000);
    $place_in_row = rand(0, 100);

    $arr[] = [
        'user_id' => $user_id,
        'place_in_row' => $place_in_row
    ];
}

print_r($arr);

echo '<br><br>';


//////////////////////////////////////////////////////////////////////////////////////////////////
/*
    6 užduotis

    Išrūšiuokite 5 uždavinio masyvą pagal 
    user_id didėjančia tvarka. 
    
    Ir paskui išrūšiuokite pagal 
    place_in_row mažėjančia tvarka.
*/
echo '<hr>6 užduotis<hr>';

usort($arr, function ($a, $b) {

    return $a['user_id'] <=> $b['user_id'];
});

echo 'Sort pagal USER_ID (Didėjančia tvarka) <br>';
print_r($arr);

usort($arr, function ($a, $b) {
    return $b['place_in_row'] <=> $a['place_in_row'];
});

echo '<br>Sort pagal PLACE_IN_ROW (Mažėjančia tvarka) <br>';
print_r($arr);

echo '<br><br>';


//////////////////////////////////////////////////////////////////////////////////////////////////
/*
    7 užduotis

    Prie 6 uždavinio masyvo antro lygio masyvų 
    pridėkite dar du elementus: name ir surname. 
    
    Elementus užpildykite stringais iš atsitiktinai 
    sugeneruotų lotyniškų raidžių, kurių ilgiai 
    nuo 5 iki 15.
*/
echo '<hr>7 užduotis<hr>';

function randomString($length)
{
    $raides = array_merge(range('A', 'Z'), range('a', 'z'));
    $string = '';

    for ($i = 0; $i < $length; $i++) {
        $string .= $raides[array_rand($raides)];
    }

    return $string;
}


foreach ($arr as &$subArr) {

    $subArr['name'] = randomString(rand(5, 15));
    $subArr['surname'] = randomString(rand(5, 15));
}

unset($subArr);

print_r($arr);

echo '<br><br>';
