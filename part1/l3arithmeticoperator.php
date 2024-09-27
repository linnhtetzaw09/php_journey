<?php

//Arithmetic Operators
//+-*/%

$num1 = 100;
$num2 = 200;
$num3 = 30.28;
$city = "magway";
$car = true;
$myarrs = ["lin",'htet'];
$colors = array("red",'green','white');

echo $num1;
echo $num2;
echo $num1+$num2;
echo $num1-$num2;
echo $num1*$num2;
echo $num2/$num1;
echo $num2%$num1;

echo $car;
echo $city;
echo $myarrs;  //array ko echo nat htoke ma ya array to string conversion error
print $myarrs;  //conversion error

var_dump($myarrs);
var_dump($colors);

$num4 = false;
$num5 = "10";
$num6 = '20';

var_dump($num5,$num6);  //string
echo $num5+$num6;  //30
echo $num6-$num5;  //10
echo $num4+$num5;  //10
var_dump($num5+$num6);  //int(30)


//overwrite

$num5 = 50;
$num6 = '60';
var_dump($num5,$num6);
echo $num5+$num6;  //110









?>