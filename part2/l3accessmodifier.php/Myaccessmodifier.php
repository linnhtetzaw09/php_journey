<?php


class Myaccessmodifier{
//      Access Modifier
//      public = anyone can access
//      private = only access inside main class
//      protected = subclass / Extended class

    public $companyname = "Data land Technology";
    var $personname = "Mr. Lin";

    private $jobtitle = "Manager";   //can't print from outside
    protected $location = "Mandalay";    //can't print from outside

    public function getinfo() {
        $num = 10;
        echo $num;

        // echo $companyname;  //can't print
        // echo $personname;   //can't print

        // echo $jobtitle;      //can't print
        // echo $location;      //can't print

    }

}

$obj = new Myaccessmodifier();
echo "This is access modifier <br/>";

echo $obj->companyname . "<br/>";    //Data land Technology
echo $obj->personname . "<br/>";     //Mr. Lin

$obj->getinfo();  //10

echo "<hr/>";

$obj->companyname = "ABC Phone";
echo $obj->companyname . "<br/>";    //ABC Phone

$obj->personname = "Ko Lin";
echo $obj->personname . "<br/>";     //Ko Lin

echo "<hr/>";

// echo $obj->jobtitle;   //can't print

echo "<hr/>";

// echo $obj->location;   //can't print

echo "<hr/>";


?>