<?php

trait Sitelogin{
    public $fullname = "Lin Lin";
    public $gmail = "linlin@gamil.com";
    public $password = 12345678;

    public function userAccess(){
        echo "This is site login . Email is $this->gmail & Password is $this->password. <br/>";
    }

    public function userInfo(){
        echo "Username is  $this->fullname. <br/>";
    }
}

trait Devlogin{
    public function githubLogin(){
        echo "This is site login . Email is $this->gmail & Password is $this->password. <br/> ";
    }
}

class Googleauth{

    //Method 3
    // use Sitelogin,Devlogin;

    public function gmailLogin(){
        // echo "This is site login . Email is $this->gmail & Password is $this->password.<br/>";
    }
}

trait Mastertrait{
    use Sitelogin,Devlogin;
}

class Mytrait extends Googleauth{
    
    //Method 1
    // use Sitelogin;
    // use Devlogin;

    //Method 2
    // use Sitelogin,Devlogin;

    //Method 4
    use Mastertrait;

}

echo "This is Mydestructor  <br/>";

$obj = new Mytrait();
$obj->gmailLogin();     //This is gmail login. Gmail is linlin@gmail.com and profile nameis lin lin
echo $obj->fullname. "<br/>";       //Lin Lin
echo $obj->gmail. "<br/>";       //linlin@gamil.com
echo $obj->password. "<br/>";       //12345678

$obj->userAccess();
$obj->userInfo();

$obj->githubLogin();


$ggo = new Googleauth;
// $ggo->gmailLogin();      //This is site login . Email is  & Password is 

echo "<hr/>";




?>