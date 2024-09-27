<?php


class Thiskeyword{
//      Access Modifier
//      public = anyone can access
//      private = only access inside main class
//      protected = subclass / Extended class

    public $companyname = "Data land Technology";
    private $jobtitle = "Manager";   //can't access from outside
    protected $location = "Mandalay";   //can't access from outside

    public function getinfo() {
        $num = 10;
        echo $num;

        echo $this->companyname;   //Data land Technology
        echo $this->jobtitle;   //Manager
        echo $this->location;   //Mandalay

    }

    public function getcompanyname(){

        echo $this->companyname;
        echo "<br/>";

        $this->companyname = "ABC Company";
        echo $this->companyname;  //ABC Company

        $this->jobtitle = "CEO";
        echo $this->jobtitle;  //CEO

        $this->location = "Yangon";
        echo $this->location;  //Yangon
    }

}

class Vehicle{
    public $brand = "Honda";

    public function getbrandname(){
        return $this->brand;
    }

    public function setbrandname($name){
        $this->brand = $name;
    }
}

$obj = new Thiskeyword();
echo "This is Thiskeyword  <br/>";

echo $obj->companyname. "<br/>";   //Data land Technology

$obj->getinfo();    //10  Data land Technology Manager Mandalay
echo "<br/>";

$obj->getcompanyname();   //Data land Technology  ABC Company CEO Yangon

echo "<br/>";

echo $obj->companyname. "<br/>";    //ABC Company
// echo $obj->jobtitle. "<br/>";    //error
// echo $obj->location. "<br/>";    //error


echo "<hr/>";

$obj2 = new Vehicle();
echo $obj2->brand . "<br/>";    //Honda
echo $obj2->getbrandname();     //Honda

echo $obj2->setbrandname("suzuki");
echo "<br/>";
echo $obj2->getbrandname();    //suzuki

echo $obj2->setbrandname("Rush");
echo "<br/>";
echo $obj2->getbrandname();    //Rush


echo "<hr/>";




?>