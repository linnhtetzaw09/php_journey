<?php

// Note:: Interface's methods can't include body
// Note:: Modifier must be public in interface cuz we need to overwrite
// Note:: To use an interface , a class must use to implements keyword
// Note:: A class that implements an interface  must implements all of the interface's methods
// Note:: Can't contain properties / common methods but can contain constant variables

interface News{
    const CAPTION = "This is caption";
    public function createpost();
    public function readpost($id);
    public function updatepost($id,$title);
    public function deletepost($id);
}

class Myinterface implements News{

    public function createpost(){
        echo "i am from create post.". self::CAPTION. "<br/>";
    }

    public function readpost($id){
        echo "i am from read post and id is  {$id} <br/>";
    }

    public function updatepost($id,$title){
        echo "i am from update post and id is  {$id} Title is {$title} <br/>";
    }

    public function deletepost($id){
         echo "i am from delete post.";
    }

    public function test(){
         echo "i am from test post.";
    }

}

class Articles implements News{

    public function test(){
        echo "i am from test post.";
   }

    public function createpost(){
        echo "i am from create articlepost.". self::CAPTION. "<br/>";
    }

    public function readpost($id){
        echo "i am from read articlepost and id is  {$id} <br/>";
    }

    public function updatepost($id,$title){
        echo "i am from update articlepost and id is  {$id} Title is {$title} <br/>";
    }

    public function deletepost($id){
         echo "i am from delete articlepost.";
    }

}


echo "This is MyInterface  <br/>";

$obj = new Myinterface();
$obj->createpost();
$obj->readpost(10);
$obj->deletepost(10,"this is new post 10");
$obj->readpost(10);
$obj->test();

echo "<hr/>";

$obj2 = new Articles();
$obj2->createpost();
$obj2->readpost(10);
$obj2->updatepost(10,"this is new post 10");
$obj2->deletepost(10);
$obj2->test();

echo "<hr/>";


?>