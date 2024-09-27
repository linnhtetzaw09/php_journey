<?php

abstract class Vehicles {
  abstract public function start();
  abstract public function stop();
}

class Car extends Vehicles {
  public function start() {
    echo "Car Started ... <br/>";
  }

  public function stop() {
    echo "Car Stopped ... <br/>";
  }
}

class Ebike extends Vehicles {
  public function start() {
    echo "Ebike Started ... <br/>";
  }

  public function stop() {
    echo "Ebike Stopped ... <br/>";
  }
}

echo "This is My polymorphism Concept with abstract <br/>";

$obj1 = new Car();
$obj1->start();
$obj1->stop();

$obj2 = new Ebike();
$obj2->start();
$obj2->stop();

echo "<hr/>";

?>
