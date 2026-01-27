<?php

$backgroundColor = '#444';
$textColor = 'white';
echo "<body style='background-color: $backgroundColor; color: $textColor; font-size: 24px; line-height: 1.5;
margin: 0 35px; margin-top: 25px; column-count: 2; column-gap: 50px; column-fill: auto;
'>";


///////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////

echo "<br><br><br><hr> Task 6 <br><hr><br>";
/*  ======== TASK 6 ========
    Naudokite funkcija rand(). 
    
    Sugeneruokite atsitiktinį skaičių nuo 1 iki 6 
    ir jį atspausdinkite atitinkame h tage. 
    Pvz skaičius 3 - rezultatas: <h3>3</h3>
*/

$var1 = rand(1, 6);

print_r("<h3>$var1</h3>");

$var1 = 0;




///////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////

echo "<br><br><br><hr> Task 7 <br><hr><br>";
/*  ======== TASK 7 ========
    Naudokite funkcija rand(). 
    
    Atspausdinkite 3 skaičius nuo -10 iki 10. 
    
    Skaičiai mažesni už 0 turi būti žali, 
    0 - raudonas, didesni už 0 mėlyni. 
*/

$var1 = rand(-10, 10);
$var2 = rand(-10, 10);
$var3 = rand(-10, 10);


// if ($var1 < 0) {
//     echo "<h3 style='display: inline;'>Pirmas sk:</h3> <h3 style='color: green; display: inline;'>$var1</h3>";
// } else if ($var1 > 0) {
//     echo "<h3 style='display: inline;'>Pirmas sk:</h3> <h3 style='color: royalblue; display: inline;'>$var1</h3>";
// } else {
//     echo "<h3 style='display: inline;'>Pirmas sk:</h3> <h3 style='color: crimson; display: inline;'>$var1</h3>";
// }

// echo '<br>';

// if ($var2 < 0) {
//     echo "<h3 style='display: inline;'>Pirmas sk:</h3> <h3 style='color: green; display: inline;'>$var2</h3>";
// } else if ($var2 > 0) {
//     echo "<h3 style='display: inline;'>Pirmas sk:</h3> <h3 style='color: royalblue; display: inline;'>$var2</h3>";
// } else {
//     echo "<h3 style='display: inline;'>Pirmas sk:</h3> <h3 style='color: crimson; display: inline;'>$var2</h3>";
// }

// echo '<br>';

// if ($var3 < 0) {
//     echo "<h3 style='display: inline;'>Pirmas sk:</h3> <h3 style='color: green; display: inline;'>$var3</h3>";
// } else if ($var3 > 0) {
//     echo "<h3 style='display: inline;'>Pirmas sk:</h3> <h3 style='color: royalblue; display: inline;'>$var3</h3>";
// } else {
//     echo "<h3 style='display: inline;'>Pirmas sk:</h3> <h3 style='color: crimson; display: inline;'>$var3</h3>";
// }

if ($var1 < 0) {
    $color = 'green';
} else if ($var1 > 0) {
    $color = 'royalblue';
} else {
    $color = 'crimson';
};

echo "<h3 style='display: inline;'>Pirmas sk:</h3> <h3 style='color: $color; display: inline;'>$var1</h3> <br>";


if ($var2 < 0) {
    $color = 'green';
} else if ($var2 > 0) {
    $color = 'royalblue';
} else {
    $color = 'crimson';
};

echo "<h3 style='display: inline;'>Pirmas sk:</h3> <h3 style='color: $color; display: inline;'>$var2</h3> <br>";


if ($var3 < 0) {
    $color = 'green';
} else if ($var3 > 0) {
    $color = 'royalblue';
} else {
    $color = 'crimson';
};

echo "<h3 style='display: inline;'>Pirmas sk:</h3> <h3 style='color: $color; display: inline;'>$var3</h3> <br>";



///////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////

echo "<br><br><br><hr> Task 8 <br><hr><br>";
/*  ======== TASK 8 ========
    Įmonė parduoda žvakes po 1 EUR. 
    
    Perkant daugiau kaip už 1000 EUR taikoma 
    3 % nuolaida, daugiau kaip už 2000 EUR 
    - 4 % nuolaida. 
    
    Parašykite programą, kuri skaičiuos žvakių 
    kainą ir atspausdintų atsakymą kiek žvakių 
    ir kokia kaina perkama. 
    
    Žvakių kiekį generuokite ​rand()​ funkcija 
    nuo 5 iki 3000.
*/

$zvakes = rand(5, 3000);

if ($zvakes > 2000) {
    $vntKaina = 0.96;
    $kiekNuolaida = 4;
    $nuolaida = $zvakes * 0.04;
} else if ($zvakes > 1000) {
    $vntKaina = 0.97;
    $kiekNuolaida = 3;
    $nuolaida = $zvakes * 0.03;
} else {
    $vntKaina = 1;
    $kiekNuolaida = 0;
    $nuolaida = 0;
};


echo "Žvakių kiekis: $zvakes VNT. <br><br> Vieneto kaina: $vntKaina EUR <br> Nuolaida: $kiekNuolaida % <br> Nuolaidos suma: $nuolaida EUR <br><br>";
echo 'Galutinė kaina su nuolaida: ' . ($zvakes - $nuolaida) . ' EUR';



///////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////

echo "<br><br><br><hr> Task 9 <br><hr><br>";
/*  ======== TASK 9 ========
    Naudokite funkcija rand(). 
    
    Sukurkite tris kintamuosius su 
    atsitiktinėm reikšmėm nuo 0 iki 100. 
    
    Paskaičiuokite jų aritmetinį vidurkį. 
    
    Ir aritmetinį vidurkį atmetus tas 
    reikšmes, kurios yra mažesnės nei 
    10 arba didesnės nei 90. Abu vidurkius 
    atspausdinkite. 
    
    Rezultatus apvalinkite iki 
    sveiko skaičiaus.
*/


$var1 = rand(0, 100);
$var2 = rand(0, 100);
$var3 = rand(0, 100);

$vidurkis = ($var1 + $var2 + $var3) / 3;

echo 'Vidurkis <br><br>';
echo "Pirmas sk: $var1 <br> Antras sk: $var2 <br> Trečias sk: $var3 <br><br>";
echo 'Vidurkis: ' . round(($vidurkis), 0) . '<br><br>';


$suma = 0;
$kiekis = 0;

if ($var1 > 10 && $var1 < 90) {
    $suma += $var1;
    $kiekis++;
};


if ($var2 > 10 && $var2 < 90) {
    $suma += $var2;
    $kiekis++;
};


if ($var3 > 10 && $var3 < 90) {
    $suma += $var3;
    $kiekis++;
};

echo 'Vidurkis NR. 2 <br><br>';
echo "Pirmas sk: $var1 <br> Antras sk: $var2 <br> Trečias sk: $var3 <br><br>"; 

if ($kiekis > 0) {
    echo 'Vidurkis: ' . round(($suma / $kiekis), 2);
} else {
    echo 'Nėra tinkamų skaičių';
};




///////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////

echo "<br><br><br><hr> Task 10 <br><hr><br>";
/*  ======== TASK 10 ========
    Padarykite skaitmeninį laikrodį, 
    rodantį valandas, minutes ir sekundes. 
    
    Valandom, minutėm ir sekundėm sugeneruoti 
    panaudokite funkciją rand(). 
    
    Sugeneruokite skaičių nuo 0 iki 300. 
    
    Tai papildomos sekundės. 
    
    Skaičių pridėkite prie jau sugeneruoto laiko. 
    
    Atspausdinkite laikrodį prieš ir po 
    sekundžių pridėjimo ir pridedamų 
    sekundžių skaičių.
*/


















///////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////

echo "<br><br><br><hr> Task 11 <br><hr><br>";
/*  ======== TASK 11 ========
    Naudokite funkcija rand(). 
    
    Sugeneruokite 6 kintamuosius su 
    atsitiktinėm reikšmėm nuo 1000 iki 9999. 
    
    Atspausdinkite reikšmes viename stringe, 
    išrūšiuotas nuo didžiausios iki 
    mažiausios, atskirtas tarpais. 
    
    Naudoti ciklų ir masyvų NEGALIMA.
*/











