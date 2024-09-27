<?php


class Mymagicconstant {

    public function getclassname1(){
        echo __CLASS__."<br/>";
    }

    public function getclassname2(){
        echo get_class($this)."<br/>";
    }

    public function getfunname1(){
        echo __FUNCTION__."<br/>";
    }

    public static function getfunname2(){
        echo __FUNCTION__."<br/>";
    }

    public function getmethodname1(){
        echo __METHOD__."<br/>";
    }

    public static function getmethodname2(){
        echo __METHOD__."<br/>";
    }


    public function getdir(){
        echo __DIR__."<br/>";
    }

    public function getfile(){
        echo __FILE__."<br/>";
    }

    public function getline(){
        echo __LINE__."<br/>";
    }


}

trait Mytrait{
    public $email = "honey@gmail.com";
    public $password = "12345678";

    //__TRAIT__ must be use in parent
    public function gettrait(){
        echo __TRAIT__."<br/>";
    }
}

class Authlogin{
    use Mytrait;

    public function login(){
        echo "This is user login, Email is $this->email & password is $this->password .<br/>";
    }



}




echo "This is Mymagicconstant  <br/>";

$obj = new Mymagicconstant();

$obj->getclassname1();      //Magicconstants
$obj->getclassname2();      //Magicconstants

$obj->getfunname1();        //getfunname1
$obj->getfunname2();        //getfunname2

$obj->getmethodname1();     //Mymagicconstant::getmethodname1
$obj->getmethodname2();     //Mymagicconstant::getmethodname2

$obj->getdir();             //C:\xampp\htdocs\phplessons\part2\l13magicconstant  (working directory - folder path)

$obj->getfile();            //C:\xampp\htdocs\phplessons\part2\l13magicconstant\Mymagicconstant.php  (working directory - file path)

$obj->getline();            //40


echo "<hr/>";

$obj2 = new Authlogin;

$obj2->login();             //This is user login, Email is honey@gmail.com & password is 12345678 .
$obj2->gettrait();          //Mytrait

echo "<hr/>";





?>