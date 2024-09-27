<?php

//= += -= *= /= %= ++ --

//Assign (=)
$city = "";  //declare
$city = null;  //declare
$city = "yangon";  //assign or initialize
$city = "Mandalay";  //overwrite or read assign
echo $city;

$x = 100;
$y = 200;
$x = $y;
echo $x; //200 

$x = $x+$y;
echo $x; //300

$i = 10;
$i = $i+1;
echo $i; //11

$i += 1;
echo $i; //11

$i++;
echo $i;  //11


$y = 20;

$y = $y-1;
echo $y; //19

$y -= 1;
echo $y; //19

$y--;
echo $y;  //19

$num = 100;

$num += 40; 
echo $num;  //140

$num -= 40; 
echo $num;  //60

$num *= 40; 
echo $num;  //4000

$num /= 40; 
echo $num;  //2.5

$num %= 40; 
echo $num;  //20



?>