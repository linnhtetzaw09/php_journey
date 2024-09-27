<?php


class Mystaticmodifier {

    //static property
   public static $count = 0;

   //non-static property
   public $idx = 0;

   public function getValue(){

    self::$count++;
    echo self::$count . "<br/>";

    $this->idx++;
    echo $this->idx. "<br/>";

   }

   public function getResult(){

    static::$count++;
    echo static::$count . "<br/>";

    $this->idx++;
    echo $this->idx. "<br/>";

   }

}

class Baby1 extends Mystaticmodifier{

}

class Baby2 extends Mystaticmodifier{

    public function getMore(){

        static::$count++;
        echo static::$count . "<br/>";
    
        $this->idx++;
        echo $this->idx. "<br/>";
    
       }

}


echo "This is Mystaticmodifier  <br/>";

$obj1 = new Mystaticmodifier();
echo $obj1->idx; //0  non-static property
echo "<br/>";
echo $obj1::$count; //0  static property
echo "<br/>";

$obj1->getValue();      //1 1
$obj1->getValue();      //2 2
$obj1->getValue();      //3 3
$obj1->getValue();      //4 4

$obj1->getResult();      //5 5
$obj1->getResult();      //6 6
$obj1->getResult();      //7 7
$obj1->getResult();      //8 8

echo "<hr/>";

$obj2 = new Mystaticmodifier();

$obj2->getValue();      //9 1
$obj2->getValue();      //10 2
$obj2->getValue();      //11 3
$obj2->getValue();      //12 4

$obj2->getResult();      //13 5
$obj2->getResult();      //14 6
$obj2->getResult();      //15 7
$obj2->getResult();      //16 8

echo "<hr/>";

$obj3 = new Baby1();

$obj3->getValue();      //17 1
$obj3->getValue();      //18 2
$obj3->getValue();      //19 3
$obj3->getValue();      //20 4

$obj3->getResult();      //21 5
$obj3->getResult();      //22 6
$obj3->getResult();      //23 7
$obj3->getResult();      //24 8

echo "<hr/>";

$obj4 = new Baby2();

$obj4->getMore();   //25 1
$obj4->getMore();   //26 2
$obj4->getMore();   //27 3
$obj4->getMore();   //28 4


echo "<hr/>";



?>