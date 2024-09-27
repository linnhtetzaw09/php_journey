<?php

//Properties and Methods Visibility

//Visibility                Availbility
//Public                    Anywhere:inside other classes and object instances
//Protected                 Inside the current class and any subclasses
//Private                   Inside the current class only

class Classconstant{

    const NAME = "Lin Htet Zaw";
    public const CITY = "MANDALAY";
    protected const MAIL = "linhtet@gmail.com";
    private const PASSWORD = "123456789";

    public function Getinfo(){
        echo "Name is ". self::NAME." and live in ". self::CITY."<br/>";
    }

    public function Getaccess(){
        echo "Mail is ". self::MAIL." and password is ". self::PASSWORD."<br/>";
    }

}

class Kids1 extends Classconstant{

}

class Kids2 extends Classconstant{

    public function getContent(){
        echo "Name is".self::NAME." AND  lives in ".self::CITY."<br/>";
    }

    public function getMail(){
        echo "Mail is ". self::MAIL."<br/>";
    }

    public function getPassword(){
        // echo "Password is ". self::PASSWORD."<br/>";
    }
}

echo "This is Classconstant  <br/>";

$obj = new Classconstant;

echo $obj::NAME ."<br/>";   //Lin Htet Zaw
echo $obj::CITY ."<br/>";   //MANDALAY


// echo $obj::MAIL ."<br/>";   //ERROR
// echo Classconstant::PASSWORD ."<br/>";   //ERROR

$obj->Getinfo();
$obj->Getaccess();

echo "<hr/>";

$kd1 = new Kids1;
echo $kd1::NAME ."<br/>";   //Lin Htet Zaw
echo Kids1::CITY ."<br/>";   //MANDALAY

// echo $kd1::MAIL ."<br/>";   //ERROR
// echo kids1::PASSWORD ."<br/>";   //ERROR

$obj->Getinfo();
$obj->Getaccess();

echo "<hr/>";

$kd2 = new Kids2;
echo $kd2::NAME ."<br/>";   //Lin Htet Zaw
echo Kids2::CITY ."<br/>";   //MANDALAY

// echo $kd2::MAIL ."<br/>";   //ERROR
// echo kids2::PASSWORD ."<br/>";   //ERROR

$kd2->Getinfo();
$kd2->Getaccess();

$kd2->getMail();
// $kd2->getPassword();

echo "<hr/>";


?>