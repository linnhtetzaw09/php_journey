<?php

ini_set("display_errors",1);

//Class object
class Mycopy {

  public $article;

  public function __construct($val)
  {
    $this->article = $val;
  }
  
}

function copyobject(Mycopy $obj1, Mycopy $obj2){

  $obj2->article = $obj1->article;

}

echo "This is Copy Object . <br/>";

$newboj1 = new Mycopy("This is the first article 1");
$newboj2 = new Mycopy("This is the second article 2");

echo $newboj1->article;      //This is the first article 1
echo "<br/>";
echo $newboj2->article;      //This is the second article 2

echo "<br/>";

copyobject($newboj1,$newboj2);

echo $newboj2->article;       //This is the first article 1



echo "<hr/>";



?>