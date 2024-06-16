<?php
session_start();
setcookie('name', '', time() - 3600);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP learn</title>
</head>

<body>
    <?php require('header.php'); ?>
    <form action="/action.php" method="post">
        <h2>Session va cookielar bilan ishlash</h2>
        <label for="name">Ismni kiriting</label><br>
        <input type="text" name="name" id="name"><br>
        <label for="email">Emailni kiriting</label><br>
        <input type="email" name="email" id="email"><br>
        <br>
        <button type="submit">Kiritish</button>
    </form>
    <?php
    // session_destroy();//sessionStorageni o'chirish
    // if ($_SESSION['name'] != '' | $_SESSION['email'] != '') {
    //     echo 'Ism: ' . $_SESSION['name'] . '<br>';
    //     echo 'Email: ' . $_SESSION['email'] . '<br>';
    // } else {
    //     echo 'Ism va Familiyani kiriting...';
    // }
    echo 'Ism: ' . $_COOKIE['name'] . '<br>';
    echo 'Email: ' . $_COOKIE['email'] . '<br>';
    ?>



    <?php include('footer.php'); ?>
</body>

</html>