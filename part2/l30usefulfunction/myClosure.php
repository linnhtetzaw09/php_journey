<?php

ini_set('display_errors', 1);

class MyClosure{
    
}

echo "This is MyLambda Function (anonymous function) or closure <br/>";

$num1 = 10;  //global variable
$num2 = 20;

function myFunOne(){
    global $num1, $num2;
    // Adding parentheses to ensure correct calculation
    echo "This is regular function. My getting values are = " . ($num1 + $num2) . "<br/>";
}

myFunOne();

// Correct function name and use parentheses for arithmetic
$myFunTwo = function() use($num1, $num2) {
    echo "This is Lambda or Closure function. My getting values are = " . ($num1 + $num2) . "<br/>";
};

$myFunTwo(); 

function MyFunCall($closureFun){
    $closureFun();
}

MyFunCall(function() use($num1, $num2){
    echo "This is Lambda or Closure function. My getting values are = " . ($num1 + $num2) . "<br/>";
});



// =>Closure function array_walk(array,callback,parameter)
$numbers = [1,2,3,4,5,6,7,8,9,10];

$totalResult = 0;

$calFun = function($num) use(&$totalResult){
    $totalResult += $num;
};

array_walk($numbers,$calFun);

echo "Total Sum Result is ". $totalResult. "<br/>";  //Total Sum Result is 55


// =>Lambada style with array_walk(array,callback(val,key,per),parameter)

$colors = array('a'=>"red",'b'=>"blue",'c'=>"white",'d'=>"black",'e'=>"brown");
$idx = 0;
array_walk($colors,function($val,$key,$per) use(&$idx){
    $idx++;
    echo "Index is {$idx} Key is {$key} and value is {$val} {$per} <br/>";
},"colour");





echo "<hr/>";
?>
