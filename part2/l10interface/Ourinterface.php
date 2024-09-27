<?php

interface Role{
    public function setid($id);
    public function createRole();
    public function readRole($id);
    public function updateRole($id,$request);
    public function deleteRole();

}

class Ourinterface implements Role{

    public $id;
    public $request;

    public function setid($id){
        $this->id = $id;
    }

    public function createRole(){
        echo "I am from create role and am given id = {$this->id} <br/>";
    }

    public function readRole($id){
        $this->id = $id;
        echo "I am from read role and i have to read record id = {$id} <br/>";
    }

    public function updateRole($id,$request){
        $this->id = $id;
        $this->request = $request;
        echo "I am from update role and i have to read record id = {$this->id} . And my request data is = {$this->request} <br/>";
    }

    public function deleteRole(){
        echo "I am from deltet role and i have to read delete record id = {$this->id} <br/>";
    }

}


echo "This is Ourinterface  <br/>";

$obj = new Ourinterface();
$obj->setid(500);
$obj->createRole();         //I am from create role
$obj->readRole(10);         //I am from read role and i have to read record id = 10
$obj->updateRole(13,"aung aung");   //I am from update role and i have to read record id = 13 . And my request data is = aung aung
$obj->deleteRole();         //I am from deltet role and i have to read delete record id = 13

echo "<hr/>";


?>