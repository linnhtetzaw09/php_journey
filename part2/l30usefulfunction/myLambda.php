<?php

ini_set('display_errors', 1);

class MyLambda{
    // Your class definition can go here
}

echo "This is MyLambda Function (anonymous function) or closure <br/>";

function myCalculate($num1, $num2, $funOne){
    $total = $num1 + $num2;
    $funOne($total);
}

$myFunOne = function($result){
    echo "Total result is = {$result} <br/>";
};

myCalculate(100, 200, $myFunOne);


function showResult($result){
    echo "Sum result is = {$result}";
}

$calFun = function($x, $y){
    return $x + $y;
};

showResult($calFun(100, 500));


// =>array_filter(array,callback)
$numbers = [10,50,23,49,18,48,90,11,13,45];

$filterEven = function ($nums){
    return $nums % 2 === 0;
};

$getEvens = array_filter($numbers,$filterEven);

echo "<pre>".print_r($getEvens,true)."</pre>";
sort($getEvens);
echo "<pre>".print_r($getEvens,true)."</pre>";







echo "<hr/>";


?>
