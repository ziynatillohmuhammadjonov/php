<?php
$username = filter_var($_POST['name'],FILTER_SANITIZE_STRING);
$email =filter_var($_POST['email'],FILTER_SANITIZE_EMAIL);
$login = filter_var($_POST['login'], FILTER_SANITIZE_STRING);
$pass=filter_var($_POST['pass'],FILTER_SANITIZE_STRING);

$error='';

if(strlen($username) <= 3) {
   $error = 'Введите имя';
} elseif(strlen($email) <= 3) { 
    $error='Введите email';
}elseif(strlen($login) <=3) {
    $error='Введите логин';
}elseif(strlen($pass) <= 3) {
  $error='Введите пароль';
}

if($error != '') {
    echo $error;
    exit();
}

$hash = 'q1y1np@r0lch@';
$hashPass= md5($hash.$pass);

require_once('../mysql_connect.php');

try {
    $sql = "INSERT INTO users (name, email, login, `pass`) VALUES (:name, :email, :login, :pass)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':name' => $username,
        ':email' => $email,
        ':login' => $login,
        ':pass' => $hashPass

    ]);
} catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
}


echo 'Всё готово';