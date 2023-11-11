<?php

$username = $_ENV['database__connection__user'];
$password = $_ENV['database__connection__password'];
$database = $_ENV['database__connection__database'];
$name_db = $_ENV['container__name']."_db";

$connect = "mysql:host=$name_db;port=3306;dbname=$database";
$pdo = new PDO($connect, $username, $password) or die('cannot instantiate PDO instance');
?>
