<?php

ini_set("display_errors",1);

//Class object
class Myiterate {

  public $article;
  public $comment = true;

  public function __construct($val)
  {
    $this->article = $val;
  }

  function greeting(){
    echo "Mingalarpr <br/>";
  }

}

echo "This is Iterate Object . <br/>";

$objs = new Myiterate("This is new article");

echo $objs->article;              //This is new article
echo "<br/>";
echo $objs->comment;              //1
echo "<br/>";
echo $objs->greeting();           //Mingalarpr

foreach($objs as $key=>$obj){
  echo $key. " = ". $obj . "<br/>";     //article = This is new article   comment = 1
}

var_dump($objs);



echo "<hr/>";



?>