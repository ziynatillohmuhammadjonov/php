<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP learn</title>
</head>

<body>
    <?php require('header.php'); ?>
    <form action="" method="post">
        <h2>Ichki faylda so'rov</h2>
        <label for="name">Ismingiz</label>
        <input type="text" name="name" id="name">
        <br>
        <label for="email">Emailingiz</label>
        <input type="email" name="email" id="email">
        <button type="submit">Yuborish</button>
    </form>
    <?php

    if ($_POST['name'] == '') {
        echo 'Ismingizni kiriting' . '<br>';
    } else {
        echo 'Ism: ' . $_POST['name'] . '<br>';
    };
    if ($_POST['email'] == '') {
        echo 'Emailingizni kiriting' . '<br>';
    } else {
        echo 'Email: ' . $_POST['email'];
    }
    // echo $_POST['email'] . '<br>';
    ?>

    <form action="./check.php" method="get">
        <h2>Tashqi faylda so'rov</h2>
        <label for="name1">Ismingiz</label>
        <input type="text" name="name1" id="name2">
        <br>
        <label for="email1">Emailingiz</label>
        <input type="email" name="email1" id="email2">
        <button type="submit">Yuborish</button>
    </form>
    <?php include('footer.php'); ?>
</body>

</html>