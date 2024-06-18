<?php
$user = 'root';
$password = '';
$db = 'testing';
$host = 'localhost';
$dns = 'mysql:host='.$host.';dbname='.$db;
$pdo = new PDO($dns, $user,$password);