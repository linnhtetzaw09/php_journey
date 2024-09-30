<?php

require_once("config/access.php");

class Database{

    private $dbhost = DB_HOST;
    private $dbuser = DB_USER;
    private $dbpass = DB_PASSWORD;
    private $dbname = DB_NAME;

    private $connect;
    private $error;
    private $dbconnected = false;
    private $stmt;

    public function __construct()
    {
        try{

            $this->connect = new PDO("mysql:host=$this->dbhost;dbname=$this->dbname",$this->dbuser,$this->dbpass);
            $this->connect->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        }catch(PDOException $e){
            $this->error = $e->getMessage();
        }
    }

    //get PDO Error
    public function geterror(){
        return $this->error;
    }

    //check database connet !?
    public function isconnect(){
        return $this->dbconnected;
    }

    //prepare with query
    public function dbquery($query){
        $this->stmt = $this->connect->prepare($query);
    }

    //query binding
    public function dbbind($param,$value,$type = null){
        
    }

    //execute after prepare
    public function dbexecute(){
        return $this->stmt->execute();
    }


    //get all results as array objects
    public function getmultidata(){
        $this->dbexecute();
        // return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
        return $this->stmt->fetchAll(PDO::FETCH_OBJ);
    }

    //get single results as array objects
    public function getsingledata(){
        $this->dbexecute();
        return $this->stmt->fetch(PDO::FETCH_ASSOC);
        // return $this->stmt->fetchAll(PDO::FETCH_OBJ);
    }

    // get database row count
    public function dbrowcount(){
        return $this->stmt->rowCount();
    }


}


?>

<!-- CREATE TABLE IF NOT EXISTS articles(
    id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    title VARCHAR(255),
    content TEXT,
    user_id INT
);

CREATE TABLE IF NOT EXISTS users(
    id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    title VARCHAR(30),
    email VARCHAR(50),
    password VARCHAR(255)
);

DESC articles;
DESC users;

SHOW INDEX FROM articles;
SHOW INDEX FROM users; -->




