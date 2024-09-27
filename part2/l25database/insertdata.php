<?php

ini_set('display_errors',1);

// => (i) MySQLi Procedural

//DB Connect
//     $connect = mysqli_connect("localhost:3307", "root", "L!nhtetz@w492OO2", "phpdbone");

//     if (!$connect) {
//             die("Connection failed: " . mysqli_connect_error());
//         }
        
//         echo "Connected successfully <br/>";

// $stmt = "INSERT INTO students(firstname,lastname,city) VALUE ('lin','lin','ygn')";

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

//  $stmt = "INSERT INTO students(firstname,lastname,city) VALUE ('lin','lin','ygn'),('myat','myat','kalaw')";


// if($connect->query($stmt)){
//     echo "Database creation success";
// }else{
//     echo "Fail to create" . $connect->error;
// }

// $connect->close();


// => (2) PDO

//DB Connect
// $dbhost = "localhost:3307";
// $dbuser = "root";
// $dbpass = "L!nhtetz@w492OO2";
// $dbname = "phpdbthree";

// try {
//     // Correct PDO connection string for MySQL
//     $connect = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
//     $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     echo "Connected Successfully<br>";

//     // Create database if not exists
//     $stmt = "INSERT INTO students(firstname,lastname,city) VALUE ('lin','lin','ygn');";
//     $stmt .= "INSERT INTO students(firstname,lastname,city) VALUE ('htet','htet','mdy');";
//     $stmt .= "INSERT INTO students(firstname,lastname,city) VALUE ('zaw','zaw','mm');";

//     $connect->exec($stmt);
//     echo "Database created successfully<br>";
// } catch (PDOException $e) {
//     echo "Error found: " . $e->getMessage();
// }

// // Close the connection
// $connect = null;


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

    $connect->exec("INSERT INTO students(firstname,lastname,city) VALUE ('mg','mg','ygn')");
    $connect->exec("INSERT INTO students(firstname,lastname,city) VALUE ('myo','muo','ygn')");
    $connect->exec("INSERT INTO students(firstname,lastname,city) VALUE ('hla','hla','ygn')");

    echo "Database created successfully<br>";
} catch (PDOException $e) {
    echo "Error found: " . $e->getMessage();
}

// Close the connection
$connect = null;



?>