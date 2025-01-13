<?php

// require_once '../libraries/SystemDatabase.php';

class User{

    private $db;

    public function __construct()
    {
        $this->db = new SystemDatabase();
    }

    public function register($data){
        $this->db->dbquery('INSERT INTO users (name, email, password) VALUES (:name, :email, :password)');
        $this->db->dbbind(':name', $data['name']);
        $this->db->dbbind(':email', $data['email']);
        $this->db->dbbind(':password', $data['password']);

        if($this->db->dbexecute()){
            return true;
        }else{ return false; }
    }


    public function checkuniqueemail($email){
        $this->db->dbquery('SELECT * FROM users WHERE email = :email');
        $this->db->dbbind(':email', $email);

        $row = $this->db->getsingledataassoc();

        if($this->db->dbrowcount() > 0){
            return true;

        }else{ return false; }

    }

    public function login($email, $password){
        $this->db->dbquery('SELECT * FROM users WHERE email = :email');
        $this->db->dbbind(':email', $email);

        $row = $this->db->getsingledataassoc();

        $hashed_password = $row['password'];

        if(password_verify($password, $hashed_password)){
            return $row;
        }else{ return false; }
    }

}

// new Article();


?>