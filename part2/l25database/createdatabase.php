<?php

ini_set('display_errors',1);

// => (i) MySQLi Procedural

//DB Connect
//     $connect = mysqli_connect("localhost:3307", "root", "L!nhtetz@w492OO2");

//     if (!$connect) {
//             die("Connection failed: " . mysqli_connect_error());
//         }
        
//         echo "Connected successfully <br/>";

// $stmt = "CREATE DATABASE IF NOT EXISTS phpdbone";

// if(mysqli_query($connect,$stmt)){
//     echo "Database creation success";
// }else{
//     echo "Fail to create";
// }

// mysqli_close($connect);


// => (ii) MySQLi Object Oriented

//DB Connect
//     $connect = new mysqli("localhost:3307", "root", "L!nhtetz@w492OO2");

//     if ($connect->connect_errno) {
//             die("Connection failed: " . $connect->connect_errno);
//         }
        
//         echo "Connected successfully <br/>";

// $stmt = "CREATE DATABASE IF NOT EXISTS phpdbtwo";

// if($connect->query($stmt)){
//     echo "Database creation success";
// }else{
//     echo "Fail to create" . $connect->error;
// }

// $connect->close();


// => (2) PDO

//DB Connect
$dbhost = "localhost:3307";
$dbuser = "root";
$dbpass = "L!nhtetz@w492OO2";

try {
    // Correct PDO connection string for MySQL
    $connect = new PDO("mysql:host=$dbhost", $dbuser, $dbpass);
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected Successfully<br>";

    // Create database if not exists
    $stmt = "CREATE DATABASE IF NOT EXISTS phpdbthree";
    $connect->exec($stmt);
    echo "Database created successfully<br>";
} catch (PDOException $e) {
    echo "Error found: " . $e->getMessage();
}

// Close the connection
$connect = null;





?>