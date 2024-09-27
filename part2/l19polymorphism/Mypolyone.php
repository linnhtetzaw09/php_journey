<?php

//Class object
class Language {

  public $name;
  public $citizen;

  public function __construct($val1,$val2){
    $this->name = $val1;
    $this->citizen = $val2;

  }

  public function speak(){
    echo "Say Something ... <br/>";
  }

}

class Burmese extends Language{

  public function speak()
  {
    echo "Hello Mingalarpar ... <br/>";
  }

}

class Japan extends Language{

  public function speak()
  {
    echo "Konnichiwa ... <br/>";
  }

}


echo "This is Mypolymorphism  <br/>";

$obj1 = new Burmese("Honey Nway Oo","Burmese");
echo $obj1->name;   //Honey Nway Oo
echo "<br/>";
echo $obj1->citizen;    //Burmese
echo "<br/>";
$obj1->speak();     //Hello Mingalarpar ...

$obj2 = new Japan("Khay Lay","Japan");
echo $obj2->name;   //Khay Lay
echo "<br/>";
echo $obj2->citizen;    //Japan
echo "<br/>";
$obj2->speak();   //Konnichiwa ...
echo "<br/>";


echo "<hr/>";





?>