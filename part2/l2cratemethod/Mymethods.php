<?php


class Mymethods{
//      Access Modifier
//      public = anyone can access
//      private = only access inside main class
//      protected = subclass / Extended class

//      Class method / method
public function greeting() {
    echo "hello bitch";
}

public function calculate($num) {
    echo "hi how are u = {$num}";
}

public function result($num = 1) {
    echo "HELLO HOW ARE U {$num}";
}

}

$obj = new Mymethods();
echo "This is class object <br/>";

$obj->greeting();
echo "<br/>";

// $obj->calculate(); //no action
$obj->calculate(150); //150

$obj->result(); //1

?>