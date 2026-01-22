<?php

$backgroundColor = '#444';
$textColor = 'white';
echo "<body style='background-color: $backgroundColor; color: $textColor; font-size: 24px; line-height: 1.5;
margin: 0 35px; margin-top: 25px; column-count: 2; column-gap: 50px; column-fill: auto;
'>";



/*
    Uždavinių sprendimui nenaudoti, masyvų, ciklų ir savo parašytų funkcijų. 
    PHP funkcijas žinoma naudokite (pageidautina).    
*/


///////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////


echo "Task 1 <br><hr><br>";
/*  ======== TASK 1 ========
    Sukurkite 4 kintamuosius, kurie saugotų jūsų vardą, pavardę, 
    gimimo metus ir šiuos metus (nebūtinai tikrus). 
    
    Parašykite kodą, kuris pagal gimimo metus paskaičiuotų jūsų 
    amžių ir naudodamas vardo ir pavardės kintamuosius atspausdintų tokį sakinį :
    "Aš esu Vardenis Pavardenis. Man yra XX metai(ų)".
*/

$name = 'Gitanas';
$surname = 'Nausėda';
$yearOfBirth = 1583;
$currentYear = 2026;

$age = $currentYear - $yearOfBirth;

echo "Vardas: $name <br>";
echo "Pavardė: $surname <br>";
echo "Gimimo metai: $yearOfBirth <br>";
echo "Dabartiniai metai: $currentYear <br><br>";

echo "Prisistatymas: <br> Aš esu $name $surname. Man yra $age metai.";

///////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////

echo "<br><br><br><hr> Task 2 <br><hr><br>";
/*  ======== TASK 2 ========
    Naudokite funkcija rand(). 
    
    Sukurkite du kintamuosius ir naudodamiesi funkcija rand() 
    jiems priskirkite atsitiktines reikšmes nuo 0 iki 4. 
    
    Didesnę reikšmę padalinkite iš mažesnės. 
    
    Atspausdinkite rezultatą jį suapvalinę iki 
    2 skaičių po kablelio.
*/

$var1 = rand(0, 4);
$var2 = rand(0, 4);

$rezultatas = null;


echo "Pirmas sk: $var1 <br>";
echo "Antras sk: $var2 <br>";

if ($var1 == 0 || $var2 == 0) {
    echo 'Negalima dalinti iš 0';
} else if ($var1 > $var2) {
    echo "Rezultatas: $var1 / $var2 = ", round(($rezultatas = $var1 / $var2), 2);
} else {
    echo "Rezultatas: $var2 / $var1 = ", round(($rezultatas = $var2 / $var1), 2);
}


///////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////

echo "<br><br><br><hr> Task 3 <br><hr><br>";
/*  ======== TASK 3 ========
    Naudokite funkcija rand(). 
    
    Sukurkite tris kintamuosius ir naudodamiesi funkcija rand() 
    jiems priskirkite atsitiktines reikšmes nuo 0 iki 25. 
    
    Raskite ir atspausdinkite kintamąjį turintį vidurinę reikšmę.
*/

$k1 = rand(0, 25);
$k2 = rand(0, 25);
$k3 = rand(0, 25);

$vidurinis = null;
// $didesnis = null;
// $mazesnis = null;

// if ($k1 >= $k2 && $k1 >= $k3) {
//     $didesnis = $k1;
// } else if ($k1 <= $k2 && $k1 <= $k3) {
//     $mazesnis = $k1;
// } else {
//     $vidurinis = $k1;
// }


// if ($k2 >= $k1 && $k2 >= $k3) {
//     $didesnis = $k2;
// } else if ($k2 <= $k1 && $k2 <= $k1) {
//     $mazesnis = $k2;
// } else {
//     $vidurinis = $k2;
// }


// if ($k3 >= $k1 && $k3 >= $k2) {
//     $didesnis = $k3;
// } else if ($k3 <= $k1 && $k3 <= $k1) {
//     $mazesnis = $k3;
// } else {
//     $vidurinis = $k3;
// }

if (($k1 >= $k2 && $k1 <= $k3) || ($k1 <= $k2 && $k1 >= $k3)) {
    $vidurinis = $k1;
} else if (($k2 >= $k1 && $k2 <= $k3) || ($k2 <= $k1 && $k2 >= $k3)) {
    $vidurinis = $k2;
} else {
    $vidurinis = $k3;
}


echo "Pirmas sk: $k1 <br>";
echo "Antras sk: $k2 <br>";
echo "Trečias sk: $k3 <br><br>";

echo "Vidurinė reikšmė: $vidurinis";







///////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////

echo "<br><br><br><hr> Task 4 <br><hr><br>";
/*  ======== TASK 4 ========
    Įvedami skaičiai -a, b, c - kraštinių ilgiai, trys 
    kintamieji (naudokite rand() funkcija nuo 1 iki 10). 
    
    Parašykite PHP programą, kuri nustatytų, ar galima 
    sudaryti trikampį ir atsakymą atspausdintų. 
*/

$a = rand(1, 10);
$b = rand(1, 10);
$c = rand(1, 10);

echo "Kraštinė a = $a <br> Kraštinė b = $b <br> Kraštinė c = $c <br><br>";

if (!($a + $b > $c) || !($a + $c > $b) || !($b + $c > $a)) {
    echo 'Trikampio sudaryti negalima';
} else {
    echo 'Trikampį sudaryti galima';
}

// echo ($a + $b > $c) && ($a + $c > $b) && ($b + $c > $a) ? 'Trikampį sudaryti galima' : 'Trikampio sudaryti negalima';





///////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////

echo "<br><br><br><hr> Task 5 <br><hr><br>";
/*  ======== TASK 5 ========
    Sukurkite keturis kintamuosius ir rand() funkcija 
    sugeneruokite jiems  reikšmes nuo 0 iki 2. 
    
    Suskaičiuokite kiek yra nulių, vienetų ir dvejetų. 
    (sprendimui masyvo nenaudoti).
*/


$kint1 = rand(0, 2);
$kint2 = rand(0, 2);
$kint3 = rand(0, 2);
$kint4 = rand(0, 2);

$nuliai = 0;
$vienetai = 0;
$dvejetai = 0;

if ($kint1 == 0) {
    $nuliai ++;
} else if ($kint1 == 1) {
    $vienetai ++;
} else {
    $dvejetai ++;
}


if ($kint2 == 0) {
    $nuliai ++;
} else if ($kint2 == 1) {
    $vienetai ++;
} else {
    $dvejetai ++;
}


if ($kint3 == 0) {
    $nuliai ++;
} else if ($kint3 == 1) {
    $vienetai ++;
} else {
    $dvejetai ++;
}


if ($kint4 == 0) {
    $nuliai ++;
} else if ($kint4 == 1) {
    $vienetai ++;
} else {
    $dvejetai ++;
}

echo "Pirmas sk: $kint1 <br> Antras sk: $kint2 <br> Trečias sk: $kint3 <br> Ketvirtas sk: $kint4 <br><br>";

echo "Kiek nulių: $nuliai <br>";
echo "Kiek vienetų: $vienetai <br>";
echo "Kiek dvejetų: $dvejetai <br>";





