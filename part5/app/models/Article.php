<?php

class Article{

    private $db;

    public function __construct()
    {
        $this->db = new SystemDatabase();
    }

    public function getarticles(){
        $this->db->dbquery("SELECT * FROM articles");
        return $this->db->getmultidataobj();
    }

}

// new Article();


?>