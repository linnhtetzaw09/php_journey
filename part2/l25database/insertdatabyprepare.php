<?php

ini_set('display_errors',1);

// Arguments (4 types)
// i = integer, d = double, s = string, b = blob

// => (i) MySQLi Procedural

//DB Connect
//     $connect = mysqli_connect("localhost:3307", "root", "L!nhtetz@w492OO2", "phpdbone");

//     if (!$connect) {
//             die("Connection failed: " . mysqli_connect_error());
//         }
        
//         echo "Connected successfully <br/>";

// $stmt = "INSERT INTO students(firstname,lastname,city) VALUE (?,?,?)";

// $insertstmt = mysqli_prepare($connect,$stmt);
// mysqli_stmt_bind_param($insertstmt,'sss',$firstname,$lastname,$city);

// $firstname = "maung";
// $lastname = "maung";
// $city = "bagan";

// mysqli_stmt_execute($insertstmt);
// echo "inserted successfully";

// mysqli_close($connect);



//     $connect = mysqli_connect("localhost:3307", "root", "L!nhtetz@w492OO2", "phpdbone");

//     if (!$connect) {
//             die("Connection failed: " . mysqli_connect_error());
//         }
        
//         echo "Connected successfully <br/>";

// $stmt = "INSERT INTO students(firstname,lastname,city) VALUE (?,?,?)";

// $insertstmt = mysqli_prepare($connect,$stmt);
// mysqli_stmt_bind_param($insertstmt,'sss',$firstname,$lastname,$city);

// $firstname = "su";
// $lastname = "su";
// $city = "magway";
// mysqli_stmt_execute($insertstmt);

// $firstname = "nu";
// $lastname = "nu";
// $city = "mdy";
// mysqli_stmt_execute($insertstmt);

// $firstname = "mu";
// $lastname = "mu";
// $city = "pyay";
// mysqli_stmt_execute($insertstmt);

// echo "inserted successfully";

// mysqli_close($stmt);
// mysqli_close($connect);


// => (ii) MySQLi Object Oriented

//DB Connect
//     $connect = new mysqli("localhost:3307", "root", "L!nhtetz@w492OO2", "phpdbtwo");

//     if ($connect->connect_errno) {
//             die("Connection failed: " . $connect->connect_errno);
//         }
        
//         echo "Connected successfully <br/>";

// $stmt = $connect->prepare("INSERT INTO students(firstname,lastname,city) VALUE (?,?,?)");
// $stmt->bind_param('sss',$firstname,$lastname,$city);

// $firstname = "kyaw";
// $lastname = "kyaw";
// $city = "maymyo";
// $stmt->execute();

// $firstname = "zin";
// $lastname = "zin";
// $city = "myeik";
// $stmt->execute();

// $firstname = "hein";
// $lastname = "hein";
// $city = "lashio";
// $stmt->execute();

// echo "inserted successfully";

// $stmt->close();
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

//     $stmt = $connect->prepare("INSERT INTO students(firstname,lastname,city) VALUE (:firstname, :lastname, :city)");
//     $stmt->bindParam(":firstname",$firstname);
//     $stmt->bindParam(":lastname",$lastname);
//     $stmt->bindParam(":city",$city);

//     $firstname = "zaw";
//     $lastname = "zaw";
//     $city = "maymyo";
//     $stmt->execute();

//     $firstname = "min";
//     $lastname = "min";
//     $city = "minbu";
//     $stmt->execute();

//     $firstname = "htin";
//     $lastname = "htin";
//     $city = "amarapura";
//     $stmt->execute();

//     echo "Database created successfully<br>";
// } catch (PDOException $e) {
//     echo "Error found: " . $e->getMessage();
// }

// // Close the connection
// $connect = null;





?>