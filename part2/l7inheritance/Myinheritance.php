<?php

//Parent Class / Main class / Super Class
//Note: define() is not working in class method
class Myinheritance{

    //properties or member properties
    public $fullname = "Lin Htet";
    public $city = "Mdy";
    public $email = "linhtet@gmailcom";
    public $password = "123456";

    //Methods / Member Methods
    public function getacess(){
        echo "This is site login : email is $this->email and pw is $this->password . <br/>";
    }

    public function getinfo(){
        echo "Name is $this->fullname and city is $this->city. <br/>";
    }

}

//Child Class
class Devlogin extends Myinheritance{

    //Member method or Own method
    public function githublogin(){
        echo "This is site login : email is $this->email and pw is $this->password and profile name is $this->fullname. <br/>";
    }

}

class Sociallogin extends Myinheritance{

    //Member method or Own method
    public function fblogin(){
        echo "This is site login : email is $this->email and pw is $this->password and profile name is $this->fullname. <br/>";
    }

    public function xlogin(){
        echo "This is site login : email is $this->email and pw is $this->password and profile name is $this->fullname. <br/>";
    }

    public function getinfo(){
        //Properties overwriting
        $this->fullname = "Lin Htet Zaw";
        $this->city = "Ygn";
        echo "Name is $this->fullname and city is $this->city. <br/>";
    }

}

class Locallogin extends Sociallogin{

    public function sitelogin(){
        echo "This is sitelogin : email is $this->email and pw is $this->password and profile name is $this->fullname. <br/>";
    }

}

echo "This is Myinheritance  <br/>";

$obj = new Myinheritance();
$obj->getacess();
$obj->getinfo();
echo $obj->fullname;

echo "<hr/>";

$objdev = new Devlogin();
$objdev->getacess();
$objdev->getinfo();
$objdev->githublogin();

echo "<hr/>";

$socialobj = new Sociallogin;
$socialobj->getacess();
$socialobj->getinfo();
$socialobj->fblogin();
$socialobj->xlogin();
// $socialobj->githublogin();   //error

echo "<hr/>";

$localobj = new Locallogin;
echo $localobj->fullname;
$localobj->sitelogin();

?>