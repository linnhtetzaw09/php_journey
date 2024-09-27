<?php

class Bankbalance {

    public $accnum;
    public $name;
    public $balance = 0;

    public function depositeamount($amount) {
        $this->balance = $this->balance + $amount;
    }

    public function checkbalance() {
        echo "Your balance is = $this->balance";
    }

    public function deductamount($amount) {
        
        if ($this->balance <= 0) {
            echo "No balance, you don't have enough money";
        } elseif ($this->balance < $amount) {
            echo "Insufficient money, try again";
        } else {
            $this->balance = $this->balance - $amount;
        }

    }

}

$bankobj1 = new Bankbalance();
$bankobj1->accnum = 1000;
$bankobj1->name = "Lin Lin";
$bankobj1->balance = 300000;

$bankobj1->checkbalance();      // 300000
$bankobj1->depositeamount(200000);  
echo "<br/>";
$bankobj1->checkbalance();      // 500000

$bankobj2 = new Bankbalance();
$bankobj2->accnum = 1001;
$bankobj2->name = "Chan Chan";
$bankobj2->balance = 500000;

$bankobj2->checkbalance();      // 500000
$bankobj2->depositeamount(200000);  
echo "<br/>";
$bankobj2->checkbalance();      // 700000
$bankobj2->deductamount(100000);  
echo "<br/>";
$bankobj2->checkbalance();      // 600000
$bankobj2->deductamount(610000);  
echo "<br/>";
$bankobj2->checkbalance();      // 600000

?>
