<!DOCTYPE html>
<html lang="uz">

<?php $website_title = 'PHP Blog';
require_once './blocks/head.php' ?>

<<<<<<< HEAD
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
=======
<body class="d-flex flex-column min-vh-100">
    <?php require 'blocks/header.php'; ?>
    <main class="container mt-5 flex-grow-1">
        <div class="row">
            <div class="col-md-8">
                <!-- Main content here -->
                <h2 class="text-center">Всей статьей</h2>
                <div class="wrapper-article">
                    <?php
                    require_once 'mysql_connect.php';
                    $sql = 'SELECT * FROM `articles` ORDER BY `date` DESC';
                    $query = $pdo->query($sql);
                    while ($row = $query->fetch(PDO::FETCH_OBJ)) {
                        echo '<div class="card">'
                            . '<h2>' . $row->title . '</h2>'
                            . '<p>' . $row->intro . '</p>'
                            . '<p class="author">Author: ' . $row->author . '</p>'
                            . '<button class=\'btn btn-warning\'>Показат больше</button>'
                            . '</div>';
                    }
                    ?>
                </div>
            </div>
            <?php require 'blocks/aside.php'; ?>
        </div>
    </main>
    <?php require 'blocks/footer.php'; ?>
    <script src="/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
>>>>>>> origin/work-pc
</body>

</html>