<?php

class Staticvsnonstatic {

    //Member variables

    //Non-static property
    public $fullname = "Lin Htet Zaw";

    //Static property
    public static $city = "Mandalay";

    //Constant
    const GENDER = "Male";

    
    //Member methods

    // Non-static method can call Static property and Non-static propety
    // Non-static method can  call Static method and Non-static method

    // Static method can not call Non-static property can call constant
    // Static method can not call Non-static method

    //Non-static method

    public function getName(){
        echo "This is non-static method <br/>";
        echo "Name is $this->fullname <br/>";
    }

    public function getCity(){
        echo "This is non-static method <br/>";
        echo "City is ". self::$city ." <br/>";
    }

    public function getGender(){
        echo "This is non-static method <br/>";
        echo "Gender is ". self::GENDER ." <br/>";
    }


    //Static Method

    public static function getStaticCity(){
        echo "This is static method <br/>";
        echo "City is " . self::$city . " and hometown is " . self::$city . " <br/>";
    }
    
    public static function getStaticGender(){
        echo "This is static method <br/>";
        echo "Gender is ". self::GENDER ." <br/>";
    }


    public function car(){
        echo "This is non-static method <br/>";

        $brand = self::carbrand();
        echo "I bought a new ${brand} car <br/>";
    }

    public static function carbrand(){
        return "Toyota Lexus Lx0570";
    }


    public function mobliebrand(){
        return "iPhone 16 pro max";
    }

    public function beforebuy(){
        echo "This is non-static method <br/>";

        $brand = $this->mobliebrand();
        echo "I am thinking about to buy a new ${brand}. <br/>";
    }

}

echo "This is Static Vs Non-static Property <br/>";
$obj = new Staticvsnonstatic;
echo $obj->fullname;     //Lin Htet Zaw
echo "<br/>";

echo $obj::$city;           //Mandalay
echo "<br/>";
echo Staticvsnonstatic::$city;  //Mandalay
echo "<br/>";

echo $obj::GENDER;          //Male
echo "<br/>";
echo Staticvsnonstatic::GENDER;  //Male
echo "<br/>";

//Non-static method
$obj->getName();    //Lin Htet Zaw
$obj->getCity();    //Mandalay
$obj->getGender();  //Male


//static method
$obj::getStaticCity();      //City is Mandalay and hometown is Mandalay
$obj::getStaticGender();    //Gender is Male

echo "<hr/>";

$obj->car();          //I bought a new Toyota Lexus Lx0570 car
$obj->beforebuy();    //I am thinking about to buy a new iPhone 16 pro max.



echo "<hr/>";


?>