<?php
$title = filter_var($_POST['title'],FILTER_SANITIZE_STRING);
$intro =filter_var($_POST['intro'],FILTER_SANITIZE_EMAIL);
$text = filter_var($_POST['text'], FILTER_SANITIZE_STRING);

$error='';

if(strlen($title) <= 3) {
   $error = 'Введите заголовок';
} elseif(strlen($intro) <= 3) { 
    $error='Введите интро статьи';
}elseif(strlen($text) <=3) {
    $error='Введите текст статьи';
}


if($error != '') {
    echo $error;
    exit();
}

require_once('../mysql_connect.php');

try {
    $sql = "INSERT INTO articles (title, intro, text, date, author) VALUES (:title, :intro, :text, :date, :author)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':title' => $title,
        ':intro' => $intro,
        ':text' => $text,
        ':date' => time(),
        ':author' => $_COOKIE['login']
    ]);
} catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
}


echo 'Всё готово';