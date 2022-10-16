<?php
$engine = "mysql";
$host = "db";
$port = 3306;
$dbname = "db_social_network";
$username = "root";
$password = "password";
$pdo = new PDO("$engine:host=$host:$port;dbname=$dbname", $username, $password);
?>