<?php


class Mydestructor{

    public $num1 = 100;
    private $num2 = 200;
    protected $num3 = 300;

    public $message = "Total result is ";

    public function __construct()
    {
       $result = $this->num1+$this->num2+$this->num3;
       echo "$this->message = $result <br/>";
    }

    //member method
    public function car($brand){
        echo "I bought a new {$brand} car. <br/>";
    }

    //magic method
    //Note : destruct can't set parameters
    public function __destruct()
    {
        echo "I am start working by automatically after all above , hello : 3";
    }

}

echo "This is Mydestructor  <br/>";

$obj = new Mydestructor();

echo $obj->car("Lexus");


echo "<hr/>";




?>