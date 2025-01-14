<?php

class Article{

    private $db;

    public function __construct()
    {
        $this->db = new SystemDatabase();
    }

    public function allarticles(){
        $this->db->dbquery("SELECT * ,
        articles.id AS article_id,
        articles.created_at AS publicdate,
        FROM articles INNER JOIN users ON articles.user_id = user.id ORDER BY articles.created_at DESC");
        return $this->db->getmultidataobj();
    }

    public function createarticle($data){
        $this->db->dbquery('INSERT INTO articles (image, title, content, category_id, status_id,user_id) VALUES (:image, :title, :content, :category_id, :status_id, :user_id)');
        $this->db->dbbind(':image', $data['image']);
        $this->db->dbbind(':title', $data['title']);
        $this->db->dbbind(':content', $data['content']);
        $this->db->dbbind(':category_id', $data['category_id']);
        $this->db->dbbind(':status_id', $data['status_id']);
        $this->db->dbbind(':user_id', $data['user_id']);

        if($this->db->dbexecute()){
            return true;
        }else{ return false; }
    }

    public function getarticlebyid($id){
        $this->db->dbquery('SELECT * FROM articles WHERE id = :id');
        $this->db->dbbind(':id', $id);

        return $this->db->getsingledataobj();
    }

    public function updatearticle($data){
        $this->db->dbquery('UPDATE articles SET image = :image, title = :title, content = :content, category_id = :category_id, status_id=:status_id WHERE id = :id');

        $this->db->dbbind(':id', $data['id']);
        $this->db->dbbind(':image', $data['image']);
        $this->db->dbbind(':title', $data['title']);
        $this->db->dbbind(':content', $data['content']);
        $this->db->dbbind(':category_id', $data['category_id']);
        $this->db->dbbind(':status_id', $data['status_id']);

        if($this->db->dbexecute()){
            return true;
        }else{ return false; }
    }

    public function deletearticle($id){
        $this->db->dbquery('DELETE FROM articles WHERE id = :id');
        $this->db->dbbind(':id', $id);

        if($this->db->dbexecute()){
            return true;
        }else{ return false; }
    }


}

// new Article();


?>


<!-- 
CREATE TABLE IF NOT EXISTS articles(
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    image VARCHAR(255) DEFAULT NULL,
    title VARCHAR(50),
    content TEXT,
    category_id INT UNSIGNED NOT NULL,
    status_id INT UNSIGNED NOT NULL,
    user_id INT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id) ON UPDATE CASCADE ON DELETE CASCADE
);

DESC articles; -->