<?php

ini_set('display_errors',1);

// => Splat Operator (...)

// (...) Spread Operator used in js
// (...) Splat Operator used in php,python

echo "This is Variadic Function <br/>";

function getVal($val1,$val2,$val3){
    echo "Val1 result is {$val1} <br/>";
    echo "Val2 result is {$val2} <br/>";
    echo "Val3 result is {$val3} <br/>";
}

getVal('su su','nu nu','yu yu');    //Val1 result is su su Val2 result is nu nu Val3 result is yu yu
getVal(...["red","green","blue","white"]);  //Val1 result is red Val2 result is green Val3 result is blue

function sumResult($num1,$num2,$num3){
    return $num1+$num2+$num3;
}

echo sumResult(1,2,3);    //6
echo "<br/>";

// echo sumResult([1,2,3]);    //error
echo sumResult(...[1,2,3]);    //6
echo "<br/>";
echo sumResult(...[1,2,3,4]);    //6

echo "<hr/>";

// => fun_get_args()

function totalResult(){
  $arrs = func_get_args();
  // echo $arrs;   // Array
    // echo "<pre>".print_r($arrs,true)."</pre>";
    // echo count($arrs);    //3
  
  $total = 0;

  
  // for($i = 0; $i < count($arrs); $i++){
  //     $total += $arrs[$i];
  // }
  // return $total;

  // foreach($arrs as $arr){
  //     $total += $arr;
  // }
  // return $total;

  return array_sum($arrs);

}

// totalResult(10,20,30);     // Array ( [0] => 10 [1] => 20 [2] => 30 )
echo totalResult(10, 20, 30);  // 60
echo "<br/>";

//=> Splat Operator In Array

$phones = ['apple','huawei','oppo','vivo'];
$cars = ['toyota','suzuki','tesla'];
$computers = ['lenovo','acer','mac'];

$myowns = [$phones,$cars,$computers];
echo "<pre>".print_r($myowns,true)."</pre>";      // Multi dimensional array

$youowns = [...$phones,...$cars,...$computers];
echo "<pre>".print_r($youowns,true)."</pre>";     // Manual array
echo "<hr/>";


function myFunOne($val){
    return $val . "<br/>";
}

myFunOne("mango");      // mango
myFunOne("mango","orange","apple");      // mango

function myFunTwo(...$val){
    return $val;
}

// myFunTwo("mango");    //Array
echo "<pre>".print_r(myFunTwo("mango"),true)."</pre>";
echo "<pre>".print_r(myFunTwo("mango","orange","apple"),true)."</pre>";
echo "<pre>".print_r(myFunTwo(100,200,300),true)."</pre>";
echo "<pre>".print_r(myFunTwo(["red","blue","white"]),true)."</pre>";
echo "<pre>".print_r(myFunTwo(["red","blue","white"],["brown","black","pink"]),true)."</pre>";
echo "<pre>".print_r(myFunTwo("mango","orange","apple",["red","blue","white"],["brown","black","pink"]),true)."</pre>";


function myFunThree(...$val){
    echo $val[1]. "<br/>";
}

myFunThree('su su','yu yu','nu nu');    // nu nu
myFunThree(['su su','yu yu','nu nu'],'red','blue');    // red


function myFunFour(...$val):string{
  return $val[2].  $val[0][2]. $val[1] ."<br/>";
}
echo(myFunFour(['su su','yu yu','nu nu'],' is my eldest sister', 'Ms.'));   // Ms.nu nu is my eldest sister


function myFunFive(string $name, int ...$age):string{
    return "{$name} is {$age[0]} years old <br/>";
}
echo myFunFive('su su',23);   // su su is 23 years old


function myFunSix(int ...$numbers):int{
    return array_sum($numbers);
}
echo myFunSix(1,2,3);   // 6
echo "<br/>";


function sayHi($greeting,...$names){
    foreach($names as $name){
        echo "{$greeting} , {$name} !! <br/>";
    }
}

sayHi("Hello",'su su','nu nu','yu yu');


// function sayHello(...$names,$greeting){
//   foreach($names as $name){
//       echo "{$greeting} , {$name} !! <br/>";
//   }
// }

// sayHello("Hello",'su su','nu nu','yu yu');       //error


echo "<hr/>";




echo "<hr/>";


?>