<?php 
// VARIABLES
$host = "localhost";
$root = "root";
$password = "";
$dbname = "metodologia";

// CONECCTION
$conn = mysqli_connect($host, $root, $password, $dbname) or die ("had been an error " . mysqli_errno($conn));