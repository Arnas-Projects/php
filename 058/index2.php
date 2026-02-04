<?php

echo '<body style="background-color: #444; color: white; font-size: 24px; line-height: 1.5;">';

require __DIR__ . '/Miskas.php';
require __DIR__ . '/Zveris.php';

echo '<br>';

echo Miskas::$kas;

echo '<br>';

echo Zveris::$kas;

$zveris1 = new Zveris('Barsukas');
$zveris2 = new Zveris('Bebras');

$zveris2->valio();


echo '<pre>';

print_r($zveris1);
print_r($zveris2);

