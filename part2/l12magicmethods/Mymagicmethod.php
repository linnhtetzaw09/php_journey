<?php


class Mymagicmethod {

    public $num;
    private $name;
    protected $age;

    public function __construct($val)
    {
        // property_exists(classname,propertyname by string)
        
        // if(property_exists('Mymagicmethod','num')){
        //     echo $this->num = $val;
        // }else{
        //     echo "Property does not exist.";
        // }

        if(property_exists($this,'num')){
            echo $this->num = $val;
        }else{
            echo "Property does not exist.";
        }

    }

}

class Mymagicone{

    public $greeting = "Mingalarpr";

    public function __get($var)
    {
        echo "You not yet defined this \"${var}\" property. <br/>";
    }

    public function __set($name, $value)
    {
        echo "You are not yet defined this \"${name}\" property . so your value \"${value}\" is can not set";
    }

}


class Mymagictwo{

    public function sayhi(){
        echo "This is sayhi non-static method <br/>";
    }

    public static function sayhello(){
        echo "This is sayhello static method <br/>";
    }

    //for non-static method
    public function __call($name, $arguments)
    {
        // echo "You are not yet defined this \"${name}\" non-static method so your parameter \"${arguments}\" is cannot set";

        echo "You are not yet defined this \"${name}\" non-static method"."<pre>".print_r($arguments,true)."</pre>";
    }

     //for static method
     public static function __callstatic($name, $arguments)
     { 
         echo "You are not yet defined this \"${name}\" static method"."<pre>".print_r($arguments,true)."</pre>";
     }
}


class  Mymagicthree{

    public function __invoke()
    {
        echo "Hello sir, i am working cuz u are trying to print out ur class object as method <br/>";
    }

}

class  Mymagicfour{

    public function __toString()
    {
        return "Hello sir, i am working cuz u are trying to print out ur class object <br/>";
    }

}


echo "This is Mymagicmethod  <br/>";

$obj = new Mymagicmethod(100);

echo "<hr/>";

$obj1 = new Mymagicone();
echo $obj1->greeting;   //Mingalarpr
echo "<br/>";
echo $obj1->hay;        //You not yet defined this "hay" property.

$obj1->bye = "good bye";    //You are not yet defined this "bye" property . so your value "good bye" is can not set

echo "<hr/>";

$obj2 = new Mymagictwo();
$obj2->sayhi();
$obj2->sayhello();

$obj2->saybye();                //You are not yet defined this "saybye" non-static method Array()
$obj2->saybye("greeting");      //You are not yet defined this "saybye" non-static method Array ( [0] => greeting )
$obj2->saybye("Hi","Hello");    //You are not yet defined this "saybye" non-static method Array (  [0] => Hi[1] => Hello )

$obj2::sayhifi();               //You are not yet defined this "sayhifi" static method Array()
$obj2::sayhifi("greeting");     //You are not yet defined this "sayhifi" static method Array ( [0] => greeting )
$obj2::sayhifi("Hi","Hello");   //You are not yet defined this "sayhifi" static method Array (  [0] => Hi[1] => Hello )

echo "<hr/>";

$obj3 = new Mymagicthree();
$obj3();            //Hello sir, i am working cuz u are trying to print out ur class object as method

echo "<hr/>";

$obj4 = new Mymagicfour();
echo $obj4;            //Hello sir, i am working cuz u are trying to print out ur class object

echo "<hr/>";



?>