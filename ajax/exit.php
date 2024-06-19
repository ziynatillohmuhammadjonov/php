<?php
// Удаление куки
setcookie('login', '', time() - 3600 * 24 * 30, '/');
unset($_COOKIE['login']);

// Возвращаем успешный ответ
echo 'true';
?>