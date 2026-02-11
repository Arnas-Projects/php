<?php
// 1. Logic: Decide the color before the HTML starts
$backgroundColor = 'black'; // Default

if (isset($_GET['color']) && $_GET['color'] == '1') {
    $backgroundColor = 'red';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Web Mechanics #7</title>
    <style>
        body {
            /* 2. Injection: PHP decides the value here */
            background-color: <?php echo $backgroundColor; ?>;
            color: white;
            padding: 50px;
        }

        a {
            color: white;
            margin-right: 20px;
            font-size: 20px;
        }
    </style>
</head>

<body>

    <a href="1-first.php">Black Background</a>
    <a href="1-first.php?color=1">Red Background</a>

    <p>Current color is: <?php echo $backgroundColor; ?></p>

</body>

</html>