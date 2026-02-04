<?php

$bgColor = 'black';

if (isset($_GET['color']) && $_GET['color'] == 1) {
    $bgColor = 'crimson';
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        a {
            color: white;
        }
    </style>
</head>

<body style="background:<?= $bgColor ?>">

    <a href="pirmas.php">Juodas fonas</a>
    <a href="pirmas.php?color=1">Raudonas fonas</a>

</body>

</html>