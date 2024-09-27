<?php

ini_set('display_errors',1);

// => (i) MySQLi Procedural

//DB Connect
//     $connect = mysqli_connect("localhost:3307", "root", "L!nhtetz@w492OO2", "phpdbone");

//     if (!$connect) {
//             die("Connection failed: " . mysqli_connect_error());
//         }
        
//         echo "Connected successfully <br/>";

// $stmt = "UPDATE students SET lastname='htet' WHERE id=1";

// if(mysqli_query($connect,$stmt)){
//     echo "Database creation success";
// }else{
//     echo "Fail to create";
// }

// mysqli_close($connect);


// => (ii) MySQLi Object Oriented

//DB Connect
//     $connect = mysqli_connect("localhost:3307", "root", "L!nhtetz@w492OO2", "phpdbtwo");

//     if ($connect->connect_errno) {
//             die("Connection failed: " . $connect->connect_errno);
//         }
        
//         echo "Connected successfully <br/>";

//     $stmt = "UPDATE students SET firstname='myat' WHERE id=2";

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
$dbname = "phpdbthree";

try {
    // Correct PDO connection string for MySQL
    $connect = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected Successfully<br>";

    // Create database if not exists
    $stmt = "UPDATE students SET city='mdy' WHERE id=6";
    $connect->exec($stmt);
    echo "Database created successfully<br>";
} catch (PDOException $e) {
    echo "Error found: " . $e->getMessage();
}

// Close the connection
$connect = null;



?>