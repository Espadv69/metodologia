<?php
// CONNECTION
$host = "localhost";
$root = "root";
$password = "";
$dbname = "metodologia";

// TRY CONNECT
try {
    $dbname = new PDO("mysql: host={$host}; dbname={$dbname}", $root, $password);
    $dbname -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("CONNECT ERROR " . $e -> getMessage());
}