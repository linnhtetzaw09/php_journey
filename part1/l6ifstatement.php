<?php

//if statement

$x = 10;
$y = 20;

if($x > $y){
    echo 'your condition is true';
}

if($x < $y){
    echo 'your condition is true';
}

//=> if else

if($x > $y){
    echo 'your condition is true';
}else{
    echo 'your condition is false';
}

if($x < $y){
    echo 'your condition is true';
}else{
    echo 'your condition is false';
}


//short hand

if($x < $y) echo 'your condition is true' ; else echo 'your condition is false';

$color = 'green';
$colorvalue = $color;  //assign reference

if($colorvalue === 'red') echo "my favourite is $color" ; else echo 'i hate red color';


//=> logical operator

$a = 100;
$b = 200;
$c = 300;

if($a < $b && $b > $c) echo "True" ; else echo "False";  //false
if($a < $b && $b < $c) echo "True" ; else echo "False";  //true

if($a < $b || $b < $c) echo "True" ; else echo "False";  //true
if($a < $b || $b > $c) echo "True" ; else echo "False";  //true


if($a < $b || $b > $c && $a > $c) echo "True" ; else echo "False";  //true
if(($a < $b || $b > $c) && $a > $c) echo "True" ; else echo "False";   //false

if(!($a < $b)) echo "True" ; else echo "False";  //false

//if elseif else

if($b > $c) echo "True"; elseif($b===200) echo "Equal" ; else echo "False";  //Equal

if($b > $c)
    echo "True";
elseif ($b === 200)
    echo "Equal";
else 
    echo "False";


$phone = "iphone";

switch($phone){
    case "sony":
        echo "i can't buy sony phone";
        break;
    case "iphone":
        echo "i can buy  iphone";
        break;
    case "mi":
        echo "i don't like mi";
         break;
    case "samsung":
        echo "i like samsung phone";
         break;
    default:
        echo "i love keypad";
}


?>