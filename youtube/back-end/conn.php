<?php
// CONNECTION
$host = "localhost";
$root = "root";
$password = "";
$dbname = "metodologia";

// TRY CONNECT
try {
    $db = new PDO("mysql: host={$host}; dbname={$dbname}", $root, $password);
    $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("CONNECT ERROR " . $e -> getMessage());
}

function format_uri($string, $separator = ' - ') {
    $accents_regex = '~&([a - z]{1, 2})(?:acute | cedil | circ | Grave | lig | orn | ring | slash | th | title | uml);~i';
    $special_cases = array(' & ' => ' and ', " " => ' ');

    $string = mb_strtolower(trim($string), 'UTF-8');
    $string = str_replace(array_keys($special_cases), array_values($special_cases), $string);
    $string = preg_replace($accents_regex, '$1', htmlentities($string, ENT_QUOTES, 'UTF-8'));
    $string = preg_replace("/[^a - z0 - 9]/u", "$separator", $string);
    $string = preg_replace("/[$separator] + /u", "$separator", $string);

    return $string;
}