<?php

ini_set('display_errors',1);

// Note:: Abstract's methods can't include body
// Note:: Any Modifier can set abstract
// Note:: To use an abstract method , a class must use to extends keyword
// Note:: A class that extends sub class must extends all of the abstract's methods 
// Note:: Can contain non static properties / static properties / common methods but can contain constant variables

// Note:: When we set abstract method class must be abstract class as well

abstract class Myabstractmethod{

    public $id = 50;
    public static $notify = "New Article Created";
    const TITLE = "This is constant variable";

    //Common Method

    public function createpost(){
        echo "I am from create post . Post title is ".self::TITLE. "<br/>";
    }

    public function readpost(){
        echo "I am  read post . ID is ". $this->id . "<br/>";
    }

    abstract public function updatepost($id,$title);

    public function deletepost($id){
        echo "I am delete post . ID is = {$id}"."<br/>";
    }

}

class Articles extends Myabstractmethod{

     public function updatepost($id,$title){
        echo "I am from update post . ID is {$id}. Title is {$title}. <br/>";
     }

}


echo "This is Myabstractmethod  <br/>";

// ERROR:: we can not instantiate abstract class
// $obj1 = new MyabstractmethodError();

$obj2 = new Articles;
echo $obj2->id;                                      //50
echo "<br/>";
echo $obj2::$notify;                                //New Article Created
echo "<br/>";
echo $obj2::TITLE;                                  //This is constant variable
echo "<br/>";

$obj2->createpost();                                //I am from create post . Post title is This is constant variable
$obj2->readpost();                                  //I am read post . ID is 50
$obj2->deletepost(100);                             //I am delete post . ID is = 100
$obj2->updatepost(20,"This is new post 20");        //I am from update post . ID is 20. Title is This is new post 20.

echo "<hr/>";


abstract class Info{

    abstract protected function name();
    abstract protected function age();
    abstract protected function professional($gender);

    public function getname(){
        return $this->name();
    }

    public function getage(){
        return $this->age();
    }

    public function getprofessional($sex){
        return $this->professional($sex);
    }
}


class Boyclass extends Info{

    public function name(){
        return "Ko Lin";
    }

    public function age(){
        return 22;
    }

    public function professional($gender){
        switch($gender){
            case "male":
                $job = "Engineer";
                break;
            case "female":
                $job = "Doctor";
                break;
            default:
                $job = "Developer";
                break;
        }
        return $job;
    }

}

class Girlclass extends Info{

    protected function name(){
        return "Ma Htet";
    }

    protected function age(){
        return 25;
    }

    protected function professional($gender){
        switch($gender){
            case "male":
                $job = "Engineer";
                break;
            case "female":
                $job = "Doctor";
                break;
            default:
                $job = "Developer";
                break;
        }
        return $job;
    }

}

$objboy = new Boyclass;
$boyname = $objboy->name();     
$boyage = $objboy->age();            
$boypro = $objboy->professional('male');       

echo "{$boyname} is {$boyage} year old and he is an {$boypro} <br/>";     //Ko Lin is 22 year old and he is an Engineer

$objgirl = new Girlclass;
$girlname = $objgirl->getname();     
$girlage = $objgirl->getage();            
$girlpro = $objgirl->getprofessional('female');       

echo "{$girlname} is {$girlage} year old and he is a {$girlpro} <br/>";    //Ma Htet is 25 year old and he is a Doctor




?>