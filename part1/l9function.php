<?php

//=>user defined function

// function name(){
//     code execution;
// }

//=>parameter function or argument function
// i. single parameter
// ii. multi ....
// function name($arg){
//     code execution;
// }

// function name($arg1,$arg2){
//     code execution;
// }

//--------------------------------

//=> default parameter function or default argument function

// function info($name ="lin",$age = 20){
//     code execution;
// }



function myfun(){
    echo "my name is lin";
}

myfun();

function myfun1(){
    $num1 = 10;
    $num2 = 20;
    $cal = $num1 + $num2;
    echo $cal;
}

myfun1();

//----------------------------

function singlefun($name){
    echo "My name is $name";
}
singlefun("lin");
singlefun("htet");

//---------------------

function multifun($name,$age){
    echo "My name is $name and i am {$age} years old.";
}

multifun("lin htet zaw",21);

//------------------------------------

function defaultfun($name = "lin htet"){
    echo "My name is $name.";
}

defaultfun();


function defaultfun1($num1 = 21,$num2 = 23,$num3 = 24){
    $cal = $num1+$num2+$num3;
    echo $cal;
}

defaultfun1(1,1);   //26
defaultfun1(10);   //57
defaultfun1();   //68


//---------------------------------------

// return function

function myreturn($num1){
    $cal = $num1 + 10;
    return $cal;
}

echo myreturn(30);  //40

function returnfun1($num1){
    return $cal = $num1 + 10;
}

echo returnfun1(20);  //30

function returnfun2($num1,$num2,$num3){
     $cal = $num1 + $num2 + $num3;
     return $cal;
}

echo returnfun2(10,20,30);  //60


function returnfun3($num1=10,$num2=20,$num3=30){
    $cal = $num1 + $num2 + $num3;
    return $cal;
}

echo returnfun3(4,5,7);  //16
echo returnfun3();   //60


//=>Dynamic function call

$dyn1 = myreturn(100);
echo $dyn1;  //110

$dyn2 = returnfun3();
echo $dyn2;  //60

$dyn3 = "returnfun1";
echo $dyn3;  //returnfun1

$dyn3 = "returnfun1";
echo $dyn3(100);

$myfun = "returnfun3";
echo $myfun;  //returnfun3

if(function_exists($myfun)){
    echo "Yes,it have.";
}else{
    echo "No,it doesn't have.";
}

//--------------------------------

?>