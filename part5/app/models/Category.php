<?php

class Category{

    private $db;

    public function __construct()
    {
        $this->db = new SystemDatabase();
    }

    public function allcategories(){
        $this->db->dbquery("SELECT * ,
        categories.id AS category_id,
        categories.name AS originalname,
        categories.created_at AS publicdate,
        FROM categories INNER JOIN statuses ON categories.status_id = statuses.id ORDER BY categories.created_at DESC");
        return $this->db->getmultidataobj();
    }

    public function createcategory($data){
        $this->db->dbquery('INSERT INTO categories (name, status_id,user_id) VALUES (:name, :status_id, :user_id)');
        $this->db->dbbind(':name', $data['name']);
        $this->db->dbbind(':status_id', $data['status_id']);
        $this->db->dbbind(':user_id', $data['user_id']);

        if($this->db->dbexecute()){
            return true;
        }else{ return false; }
    }

    public function getcategorybyid($id){
        $this->db->dbquery('SELECT * FROM categories WHERE id = :id');
        $this->db->dbbind(':id', $id);

        return $this->db->getsingledataobj();
    }

    public function updatecategory($data){
        $this->db->dbquery('UPDATE categories SET name = :name, status_id=:status_id WHERE id = :id');
        $this->db->dbbind(':name', $data['name']);
        $this->db->dbbind(':id', $data['id']);
        $this->db->dbbind(':status_id', $data['status_id']);

        if($this->db->dbexecute()){
            return true;
        }else{ return false; }
    }

    public function deletecategory($id){
        $this->db->dbquery('DELETE FROM categories WHERE id = :id');
        $this->db->dbbind(':id', $id);

        if($this->db->dbexecute()){
            return true;
        }else{ return false; }
    }


}


?>


<!-- 
CREATE TABLE IF NOT EXISTS categories(
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50),
    status_id INT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (status_id) REFERENCES statuses(id) ON UPDATE CASCADE ON DELETE CASCADE,
    FOREIGN KEY (user_id) REFERENCES users(id) ON UPDATE CASCADE ON DELETE CASCADE
);

DESC categories; -->