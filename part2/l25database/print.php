<?php

ini_set("display_errors",1);

// => (i) MySQLi Procedural
    // => DB Connect
    // mysqli_connect(servername,dbusername,dbpassword,dbname);
    // $connect = mysqli_connect("localhost:3307", "root", "L!nhtetz@w492OO2", "phpone");

 //=> (ii) MySQLi Object-Oriented
    
    //new mysqli(servername,dbusername,dbpassword,dbname);
    // $connect = new mysqli("localhost:3307","root","L!nhtetz@w492OO2","phpone");

// =>PDO (PHP Dato Object)
    // new PDO("mysql:host=host;dbname=dbname",dbusername,dbpassword);

    // $connect = new PDO("mysql:host=localhost:3307;dbname=phpone","root","L!nhtetz@w492OO2");
    // $connect->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    // => Method 1
    // $dbhost = "localhost:3307";
    // $dbuser = "root";
    // $dbpw = "L!nhtetz@w492OO2";
    // $dbname = "phpone";

    // $connect = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpw);
    // $connect->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    // => Method 2
            // (Set DSN = Data Source Name)
        // $options = [
        //     PDO::ATTR_PERSISTENT => true,
        //     PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        // ];
        // $connect = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpw, $options);
            

    //=>Exercises
    // => (i) MySQLi Procedural  (mysqli_close($connect);)
        // $connect = mysqli_connect("localhost:3307", "root", "L!nhtetz@w492OO2", "phpone");

        // if (!$connect) {
        //     die("Connection failed: " . mysqli_connect_error());
        // }
        
        // echo "Connected successfully";

    // => (ii) MySQLi Object-Oriented ($connect->close();)
    
    // $connect = new mysqli("localhost:3307","root","L!nhtetz@w492OO2","phpone");

    //     if ($connect->$connect_errno) {
    //         die("Connection failed: " . $connect->$connect_errno);

    //         echo "Connection failed: " . $connect->$connect_errno;
    //         exit();
    //     }
        
    //     echo "Connected successfully";

    
    // =>PDO (PHP Data Object)
    $dbhost = "localhost:3307";
    $dbuser = "root";
    $dbpw = "L!nhtetz@w492OO2";
    $dbname = "phpone";

    try{
        $connect = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpw);
        $connect->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        echo "Connected successfully";
    }catch(PDOException $e){
        die("Connection Failed". $e->getMessage());
    }


    // (Set DSN = Data Source Name)
        $options = [
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ];
        $connect = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpw, $options);





?>