<?php

// require_once '../libraries/SystemDatabase.php';

class User{

    private $db;

    public function __construct()
    {
        $this->db = new SystemDatabase();
    }

    public function register($data)
{
    try {
        // Prepare the SQL query for inserting user data
        $this->db->dbquery('INSERT INTO users (name, email, password) VALUES (:name, :email, :password)');
        $this->db->dbbind(':name', $data['name']);
        $this->db->dbbind(':email', $data['email']);
        $this->db->dbbind(':password', $data['password']);

        // Execute the query
        if ($this->db->dbexecute()) {
            return true;
        } else {
            // Log error if query execution fails
            error_log("Failed to execute query. SQL Error: ");
            return false;
        }
    } catch (Exception $e) {
        // Log the error if something goes wrong
        error_log("Error in register method: " . $e->getMessage());
        return false;
    }
}



    public function checkuniqueemail($email){
        $this->db->dbquery('SELECT * FROM users WHERE email = :email');
        $this->db->dbbind(':email', $email);

        $row = $this->db->getsingledataassoc();

        if($this->db->dbrowcount() > 0){
            return true;

        }else{ return false; }

    }

    public function login($email, $password)
{
    // Prepare the query to select the user by email
    $this->db->dbquery('SELECT * FROM users WHERE email = :email');
    
    // Bind the email parameter
    $this->db->dbbind(':email', $email);
    
    // Execute the query and fetch the result
    $row = $this->db->getsingledataassoc();
    
    // Check if user was found
    if ($row) {
        // Get the hashed password from the database
        $hashed_password = $row['password'];
        
        // Verify the provided password against the hashed password
        if (password_verify($password, $hashed_password)) {
            return $row;  // Return the user data if the password is correct
        }
    }
    
    // Return false if the user was not found or password verification failed
    return false;
}

public function getarticlebyid($id){
    $this->db->dbquery('SELECT * FROM users WHERE id = :id');
    $this->db->dbbind(':id', $id);

    return $this->db->getsingledataobj();
}


}

// new Article();


?>