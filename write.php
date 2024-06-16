<?php
$mes = $_POST['message'] . "\n";
$file = fopen('./data/text.txt', 'a');
fwrite($file, $mes);
fclose($file);
header('Location: /php');
exit();
