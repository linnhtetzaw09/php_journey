<?php

interface Greeting {
   public function speak();
}

class Myanmar implements Greeting {

  public function speak() {
    echo "Mingalar Pr ...";
  }

}

class English implements Greeting {

  public function speak() {
    echo "Hello ...";
  }

}

function results($objs){

  foreach($objs as $obj){
    echo $obj->speak()."<br/>";
  }

}

echo "This is My polymorphism Concept with interface <br/>";

$datas = [
  new Myanmar(),
  new English()
];


results($datas);


echo "<hr/>";

?>
