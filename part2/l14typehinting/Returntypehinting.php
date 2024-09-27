<?php

//note :: void is a return-only for type declaration assign . the function does not return a value . void is for php version 7.1 and higher

class Returntypehinting{

    public $name;

    public function setname(string $val):void{
         $this->name = $val;
    }

    public function getname():string{
        return $this->name;
    }

}

class Person extends Returntypehinting{
    public $userid;
    public $username;

    function setinfo(array $arr):void{
        $this->userid = $arr["id"];
        $this->username = $arr["name"];
    }
}


echo "This is Returntypehinting  <br/>";

$obj1 = new Returntypehinting;
$obj1->setname("lin htet zaw");
echo $obj1->getname();      //lin htet zaw

echo "<br/>";

$obj2 = new Person;
$obj2->setname("su su");
echo $obj2->getname();      //su su

echo "<br/>";

$datas = ["id"=>"1","name"=>"Chan Chan"];
$obj2->setinfo($datas);

echo $obj2->userid;         //1
echo "<br/>";
echo $obj2->username;       //Chan Chan



?>