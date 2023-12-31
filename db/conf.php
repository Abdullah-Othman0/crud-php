<?php
$url = "127.0.0.1";
$db = "attendance";
$user = "root";
$pass = '';
$charset = "utf8mb4";
$dsn = "mysql:host=$url;dbname=$db;charset=$charset";

try {
    $pdo = new PDO($dsn, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    throw new PDOException($e->getMessage());
}

require_once 'crud.php';
$crud = new crud($pdo);
?>