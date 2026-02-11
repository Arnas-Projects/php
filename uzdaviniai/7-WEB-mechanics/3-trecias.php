<?php

$bgColor = 'black';

if (isset($_GET['color'])) {
    $bgColor = $_GET['color'];

    if (preg_match('/^[0-9A-Fa-f]{3,6}$/', $bgColor)) {
        $bgColor = '#' . $bgColor;
    }
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

    <a href="3-trecias.php">Juodas fonas</a>

    <br><br>

    <form method="GET" action="3-trecias.php">
        <input type="text" name="color">
        <!-- <input type="text" name="ant_durniaus"> -->
        <button>Keisti</button>
    </form>

</body>

</html>