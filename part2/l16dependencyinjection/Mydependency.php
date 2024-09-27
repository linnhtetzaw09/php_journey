<?php

ini_set("display_errors",1);

//Class object
class Course {

  public $courseidx;

  public function __construct($val)
  {
    $this->courseidx = $val;
  }

  public function getcourseidx(){
    echo "Course Idx is = ". $this->courseidx ."<br/>";
  }

}


class Lesson extends Course {

  public $lessonidx;

  public function __construct($val)
  {
    $this->lessonidx = $val;
  }

  public function getlessonidx(){
    echo "Lesson Idx is = ". $this->lessonidx ."<br/>";
  }

}

echo "This is Mydependency Injecton <br/>";

$getcourse = new Course(1);
$getcourse->getcourseidx();     //Course Idx is = 1
// $getcourse->getcourseidx();     //error


$getlesson = new Lesson(20);
$getlesson->getlessonidx();     //Lesson Idx is = 20
$getlesson->getcourseidx();     //Lesson Idx is = 


echo "<hr/>";

// =>Parent to Child

class Vehicles{

  public $modelnumber;
  public $evcarobj;
  public $carmodelobj;

  public function __construct($val,$price,$type)
  {
    $this->modelnumber = $val;
    $this->evcarobj = new EVcar($price);
    $this->carmodelobj = new Carmode($type);
  }

  public function getmodelnumber(){
    echo "Vehicle model number is ". $this->modelnumber ."<br/>";
  }

}

class EVcar extends Vehicles{

  public $price;

  public function __construct($price)
  {
    $this->price = $price;
  }

  public function getprice(){
    echo "Ev Car Price is ". $this->price ."<br/>";
  }

}

class Carmode extends Vehicles{

  public $type;

  public function __construct($type)
  {
    $this->type = $type;
  }

  public function gettype(){
    echo "Car mode type  is ". $this->type ."<br/>";
  }

}

$getvehicle = new Vehicles(1111,2000000,"Luxury");
$getvehicle->getmodelnumber();          //Vehicle model number is 1111

$getevcar = new EVcar(300000);
$getevcar->getprice();                  //Ev Car Price is 300000

$getcarmode = new Carmode("Business");
$getcarmode->gettype();                 //Car mode type is Business

$getvehicle->evcarobj->getprice();      //Ev Car Price is 2000000
$getvehicle->carmodelobj->gettype();    //Car mode type is Luxury

echo "<hr/>";


// =>Child to Parent

class Phone{

  public $brand;

  public function __construct($val)
  {
    $this->brand = $val;
  }

  public function getbrand(){
    return "Phone brand is = ". $this->brand ."<br/>";
  }

}


class Phonemodel extends Phone{

  public $price;

  public function __construct($val,Phone $phone)
  {
    $this->price = $val;
    $this->brand = $phone->getbrand();
  }

  public function getprice(){
    echo "Price is ". $this->price . "<br/>";
  }

}

$phoneobj = new Phone("iPhone");
echo $phoneobj->getbrand();           //Phone brand is = iPhone

$phonemodelobj = new Phonemodel(500, $phoneobj);
$phonemodelobj->getprice();           //Price is 500

// passing by properties 
echo $phonemodelobj->getbrand();      //Phone brand is = Phone brand is = iPhone

// echo $phonemodelobj->brand;           //Phone brand is = Phone



?>