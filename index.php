<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP learn</title>
</head>

<body>
    <?php

    use function PHPSTORM_META\type;

    require('header.php'); ?>
    <h1>MO (БД)</h1>
    <?php
    $user = 'root';
    $password = '';
    $db = 'testing';
    $host = 'localhost';

    $dsn = 'mysql:host=' . $host . ';dbname=' . $db;
    $pdo = new PDO($dsn, $user, $password);

    $query = $pdo->query('SELECT * FROM `users`');
    while ($row = $query->fetch(PDO::FETCH_OBJ)) {
        echo '<h1> Login: ' . $row['login'] . '</h1><p>Email: <b>' . $row['email'] . '</b></p>';
    }
    ?>
    <?php include('footer.php'); ?>
</body>

</html>