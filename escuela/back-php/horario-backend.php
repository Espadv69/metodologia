<?php 
// CONNECTION 
$host = "localhost";
$root = "root";
$password = "";
$dbname = "metodologia";

try {
    $db = new PDO("mysql:host={$host}; dbname={$dbname}", $root, $password);

    $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $exception) {
    die("CONNECTION ERROR " . $exception -> getMessage());
}