<?php
$login = filter_var($_POST['login'], FILTER_SANITIZE_STRING);
$pass = filter_var($_POST['pass'], FILTER_SANITIZE_STRING);

$error = '';


if (strlen($login) <= 3) {
    $error = 'Введите логин';
} elseif (strlen($pass) <= 3) {
    $error = 'Введите пароль';
}

if ($error != '') {
    echo $error;
    exit();
}

$hash = 'q1y1np@r0lch@';
$hashPass = md5($hash . $pass);

require_once ('../mysql_connect.php');

try {
    $sql = "SELECT `id` FROM `users` WHERE `login`=:login && `pass`=:pass";
    $query = $pdo->prepare($sql);
    $query->execute([
        'login' => $login,
        'pass' => $hashPass
    ]);
    $user = $query->fetch(PDO::FETCH_OBJ);
    if ($user->id == 0) {
        echo 'Такой ползовател не найден';
    } else {
        setcookie('login', $login, time() + 3600 * 24 * 30, '/');
        echo 'Всё готово';
    }

} catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
}


