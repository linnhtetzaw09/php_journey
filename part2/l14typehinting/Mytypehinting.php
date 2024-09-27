<?php

// Note :: type hinting is concept htat provides hits to function or method for the expected data type of arguments

// Adventage of type hinting
    //help users debug the code easily or the code provides error very specifically
    //a great concept for static kind of data

// Disadventage of type hinting
    //function or method only take one type of data
    //the dynamic data or argument are not there

declare(strict_types=1);
ini_set('display_errors',1);

class Mytypehinting {

  public function getdata($val){
    echo $val ."<br/>";  
  }

}

echo "This is Mytypehinting  <br/>";

$obj1 = new Mytypehinting();
$obj1->getdata("aung aung");              //aung aung
$obj1->getdata("10");                     //10
$obj1->getdata(100);                      //100
$obj1->getdata(10.37);                    //10.37
$obj1->getdata(true);                     //1
$obj1->getdata(["red","blue","white"]);   //Array

echo "<hr/>";

class Typehinting2 {

  public function getdata(string $val){
    echo $val ."<br/>";  
  }

}

$obj2 = new Typehinting2();
$obj2->getdata("aung aung");              //aung aung   aung aung
$obj2->getdata("10");                     //10          10
// $obj2->getdata(100);                      //100         error
// $obj2->getdata(10.37);                    //10.37       error
// $obj2->getdata(true);                     //1           error
// $obj2->getdata(["red","blue","white"]);   //error    error

echo "<hr/>";

class Typehinting3 {

  public function getdata(int $val){
    echo $val ."<br/>";  
  }

}

$obj3 = new Typehinting3();
// $obj3->getdata("aung aung");              //error
// $obj3->getdata("10");                     //error
$obj3->getdata(100);                      //100
// $obj3->getdata(10.37);                    //error
// $obj3->getdata(true);                     //error
// $obj3->getdata(["red","blue","white"]);   //error

echo "<hr/>";

class Typehinting4 {

  public function getdata(bool $val){
    echo $val ."<br/>";  
  }

}

$obj4 = new Typehinting4();
// $obj4->getdata("aung aung");              //error
// $obj4->getdata("10");                     //error
// $obj4->getdata(100);                      //error
// $obj4->getdata(10.37);                    //error
$obj4->getdata(true);                     //1
// $obj4->getdata(["red","blue","white"]);   //error

echo "<hr/>";

class Typehinting5 {

  public function getdata(float $val){
    echo $val ."<br/>";  
  }

}

$obj5 = new Typehinting5();
// $obj5->getdata("aung aung");              //error
// $obj5->getdata("10");                     //error
$obj5->getdata(100);                      //100
$obj5->getdata(10.37);                    //10.37
// $obj5->getdata(true);                     //error
// $obj5->getdata(["red","blue","white"]);   //error

echo "<hr/>";

class Typehinting6 {

  public function getdata(array $val){
    echo $val ."<br/>";  
  }

}

$obj6 = new Typehinting6();
// $obj6->getdata("aung aung");              //error
// $obj6->getdata("10");                     //error
// $obj6->getdata(100);                      //100
// $obj6->getdata(10.37);                    //10.37
// $obj6->getdata(true);                     //error
$obj6->getdata(["red","blue","white"]);   //Array

echo "<hr/>";

class Typehinting7 {

  public function total(array $arrs){
    $result = 0;

    foreach($arrs as $arr){
      // $result += $arr;

      $result = $result + $arr;
    }

    echo $result;
  }

}

$obj7 = new Typehinting7();
$obj7->total([10,20,30,40,50]);   //150

echo "<hr/>";

 class Phone{

  protected $brand;
  protected $facesensor;
  protected $numofsim;
  protected $price;

  public function setbrand(string $value){
    $this->brand = $value;
  }

  public function setfacesensor(bool $value){
    $this->facesensor = $value;
  }

  public function setnumofsim(int $value){
    $this->numofsim = $value;
  }

  public function setprice(float $value){
    $this->price = $value;
  }

  public function getinfo(){
    echo "Brand Name is $this->brand <br/> Face Sensor = $this->facesensor <br/> Number of SIM = $this->numofsim <br/> Phone price is = $this->price <br/>";
  }

 }

 $objphone = new Phone;
 $objphone->setbrand("iPhone");
 $objphone->setfacesensor(true);
 $objphone->setnumofsim(2);
 $objphone->setprice(999.68);
 $objphone->getinfo();

 echo "<hr/>";


?>