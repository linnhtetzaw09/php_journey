<?php


class Myscoperesolutionoperator{

    //Member Constant Variables
    const GREETING = "Hello friends. good evening";
    const THANKS = "Thanks for hiring me";

    public $fullname = "Lin Htet Zaw";

    //Member Methods
    public function Sayhifi(){
        echo self::GREETING;
    }

    public function Saybye(){
        echo static::THANKS;
    }

    public function __construct()
    {
        echo "i am working by automatically from main class <br/>";
    }

}

class Child1 extends Myscoperesolutionoperator{

}

class Child2 extends Myscoperesolutionoperator{

    const GREETING = "Hello guys. good morning from japan";
    const THANKS = "Thanks for everything";

    public function Sayhello(){
        echo self::GREETING;
    }

    public function Sayxi(){
        echo static::THANKS;
    }

}

class Child3 extends Myscoperesolutionoperator{

    public function __construct()
    {
        // parent::__construct();
        parent::Sayhifi();
        echo "i am working by automatically from sub class <br/>";
    }

}

echo "This is Myscoperesolutionoperator  <br/>";

$obj = new Myscoperesolutionoperator;

echo $obj->fullname ."<br/>";
echo $obj::GREETING ."<br/>";    //SRO
echo Myscoperesolutionoperator::GREETING;

$obj->Sayhifi();
echo "<br/>";
$obj->Saybye();

echo "<hr/>";
echo "<hr/>";

$ch1 = new Child1;
echo $ch1->fullname."<br/>";
echo $ch1::GREETING."<br/>";
echo Child1::GREETING."<br/>";

$ch1->Sayhifi();
echo "<br/>";
$ch1->Saybye();

echo "<hr/>";
echo "<hr/>";

$ch2 = new Child2;

echo $ch2->fullname ."<br/>";           //Lin Htet Zaw
echo $ch2::GREETING ."<br/>";           //Hello guys. good morning from japan
echo Child2::GREETING ."<br/>";         //Hello guys. good morning from japan

$ch2->Sayhifi();        //Hello guys. good morning from japan  ::self
echo "<br/>";
$ch2->Saybye();         //Thanks for everything  ::static
echo "<br/>";
$ch2->Sayhello();       //Hello guys. good morning from japan  ::self
echo "<br/>";
$ch2->Sayxi();          //Thanks for everything  ::static

echo "<hr/>";
echo "<hr/>";

$ch3 = new Child3;   //i am working by automatically from main classi am working by automatically from sub class
echo $ch3->fullname ."<br/>";           //Lin Htet Zaw
echo $ch3::GREETING ."<br/>";           //Hello friends. good evening
echo Child3::GREETING ."<br/>";         //Hello friends. good evening

$obj->Sayhifi();        //Hello friends. good evening ::self
echo "<br/>";
$obj->Saybye();         //Thanks for hiring me  ::static

// $ch2->Sayhello();       //error
// echo "<br/>";
// $ch2->Sayxi();           //error

echo "<hr/>";


?>