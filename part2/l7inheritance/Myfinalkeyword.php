<?php

//Note: final keyword is used for restrict method and class not to be share with child class
class Myfinalkeyword{

    public $fullname = "Chan Hein";
    public $city = "Mdy";
    public $email = "chanchan@gmailcom";
    public $password = "67890";

    public function getacess(){
        echo "This is site login : email is $this->email and pw is $this->password . <br/>";
    }

    final public function getinfo(){
        echo "Name is $this->fullname and city is $this->city. <br/>";
    }

}

class Developerlogin extends Myfinalkeyword{

    public function githublogin(){
        echo "This is git login : email is $this->email, profile name is $this->fullname and pw is $this->password . <br/>";
    }

    // public function getinfo(){
    //     echo "My full name is $this->fullname and current city is $this->city. <br/>";
    // }

}

echo "<hr/>";

echo "This is Final Keyword <br/>";

echo "<br/>";

$obj = new Myfinalkeyword;
echo $obj->fullname . "<br/>";
$obj->getacess();
$obj->getinfo();

echo "<hr/>";

$obj2 = new Developerlogin;
echo $obj2->fullname . "<br/>";
$obj2->githublogin();



?>