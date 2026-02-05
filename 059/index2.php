<?php

echo '<body style="background-color: #444; color: white; font-size: 24px; line-height: 1.5;">';

require __DIR__ . '/Fauna.php';
require __DIR__ . '/Fauna2.php';
require __DIR__ . '/Flora.php';

require __DIR__ . '/Miskas2.php';
require __DIR__ . '/Zveris2.php';

// echo '<br>';

// echo Miskas2::$kas;

// echo '<br>';

// echo Zveris2::$kas;

$zveris1 = new Zveris('Barsukas');
$zveris2 = new Zveris('Bebras');

$zveris2->valio();
$zveris2->miskoKas();


echo '<pre>';

print_r($zveris1);
print_r($zveris2);

