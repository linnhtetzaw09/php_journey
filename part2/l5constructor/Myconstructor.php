<?php


class Myconstructor{

    public $num1 = 100;
    private $num2 = 200;
    protected $num3 = 300;

    public $message = "Total result is ";

    //Magic method
    // public function __construct() {
    //     echo "I am working by automatically ";
    // }

    // public function __construct($name) {
    //     echo "I am ($name) and i am working by automatically ";
    // }

    // public function __construct($name,$age) {
    //     echo "I am {$name} and i am {$age} years old and i am working by automatically ";
    // }


    public function __construct()
    {
        $result = $this->num1+$this->num2+$this->num3;

        // echo $this->message = $result;
        echo "{$this->message} = {$result}";    //Total result is = 600
    }

}

echo "This is Myconstructor  <br/>";

// $obj = new Myconstructor();
// $obj = new Myconstructor("Lin Htet Zaw");
// $obj = new Myconstructor("Lin Htet Zaw",22);

$obj = new Myconstructor();


echo "<hr/>";




?>