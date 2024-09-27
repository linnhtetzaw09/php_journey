<?php

//=>Define Class Object (OOP)

// class Classname{
//      properties
//      method s
// }

// new Classname();

class Myproperties {

    // Properties 
    var $firstName = "Lin Htet";
    var $lastName = "Zaw";

}

$obj = new Myproperties();
echo "This is class object <br/>";

echo $obj->firstName." ".$obj->lastName;





?>