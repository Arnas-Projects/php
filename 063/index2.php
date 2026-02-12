<?php
$host = '127.0.0.1';
$db   = 'forest';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, // fečinam kaip masyvą
    PDO::ATTR_EMULATE_PREPARES   => false,
];
$pdo = new PDO($dsn, $user, $pass, $options);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Clients Database</title>
</head>

<body>

    <?php

    $sql = "
        SELECT c.id, client_name, p.id AS pid, phone_number
        FROM clients AS c
        LEFT JOIN phones AS p
        ON c.id = p.client_id
        ";

    $stmt = $pdo->query($sql);
    $all = $stmt->fetchAll();

    $clients = [];
    foreach ($all as $row) {
        $clientId = $row['id'];
        if (!isset($clients[$clientId])) {
            $clients[$clientId] = [
                'id' => $row['id'],
                'client_name' => $row['client_name'],
                'phones' => []
            ];
        }
        if ($row['pid'] !== null) {
            $clients[$clientId]['phones'][] = [
                'pid' => $row['pid'],
                'phone_number' => $row['phone_number']
            ];
        }
    }
    $all = array_values($clients);

    ?>

    <div class="container">
        <h1>👥 Clients Database LEFT</h1>
        <table>
            <thead>
                <tr>
                    <th>Client ID</th>
                    <th>Client Name</th>
                    <th>Phones</th>

                </tr>
            </thead>
            <tbody>
                <?php foreach ($all as $row) : ?>
                    <tr>
                        <td><?= $row['id'] ?></td>
                        <td><?= $row['client_name'] ?></td>
                        <td>
                            <?php if (count($row['phones']) > 0) : ?>
                                <ul>
                                    <?php foreach ($row['phones'] as $phone) : ?>
                                        <li><?= $phone['phone_number'] ?></li>
                                    <?php endforeach ?>
                                </ul>
                            <?php else : ?>
                                No phones
                            <?php endif ?>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>

</body>

</html>