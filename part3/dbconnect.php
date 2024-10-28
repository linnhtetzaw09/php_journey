<?php

$dbhost = "localhost:3307";
$dbuser = "root";
$dbpass = "L!nhtetz@w492002";
$dbname = "phpdbfive";

try {
    // Correct connection string with dbname parameter
    $connect = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Error found: " . $e->getMessage();
}





?>
