<?php

//=>Data Binding
    // (i) Static Binding   or Early binding - Compile time binding (self keyword)
      // Binding everything before program running
      // index.php > compile > execute
    // (ii) Dynamic Binding  or Late binding  or Late static binding - Run time binding (static keyword)
          // index.php > transpile > execute

//Class object
class hola1 {

  public $name = "Ko Ko";

  public function friend(){
    return "My best friend name is ". $this->name . "<br/>";
  }

  public function getfriend(){
    echo $this->friend();
  }

}

class hola2 extends hola1{

    public function friend(){
        return "My best friend name is ". $this->name . " and Su Su .<br/>";
      }

}




echo "This is Mybinding  <br/>";

$obj1 = new hola1();
echo $obj1->friend();       // My best friend name is Ko Ko
echo $obj1->getfriend();    // My best friend name is Ko Ko

$obj2 = new hola2();
echo $obj1->friend();       // My best friend name is Ko Ko and Su Su
echo $obj1->getfriend();    // My best friend name is Ko Ko and Su Su

echo "<hr/>";

class hola3{
  public static $name = "Ko Ko";

  public static function friend(){
    return "My best friend name is ". self::$name."<br/>";
  }

  public static function getfriend(){
    echo self::friend();
    echo static::friend();
  }
}

class hola4 extends hola3{

  public static function friend(){
    return "My best friend name is ". self::$name." and Yu Yu <br/>";
  }

  public static function getfriend()
  {
    echo self::friend();
  }

}

$obj3 = new hola3();
echo $obj3::friend();       // My best friend name is Ko Ko
echo $obj3::getfriend();    // My best friend name is Ko Ko

$obj4 = new hola4();
echo $obj4::friend();       // My best friend name is Ko Ko and Yu Yu
echo $obj4::getfriend();    // My best friend name is Ko Ko


echo "<hr/>";





?>