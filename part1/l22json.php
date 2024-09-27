<?php


//=>json_encode(array);

//=>json_decode(array);
//=>json_decode(array,associate true);

$colors = ['red','green','blue'];
// var_dump($color);    //array

$mycolors = json_encode($colors);
echo $mycolors;     //["red","green","blue"]  string
var_dump($mycolors);    //string(22) "["red","green","blue"]"



$students = ['name'=>"aung",'age'=>31,"city"=>"mdy"];
var_dump($students);
echo $students["name"];
echo $students["age"];
echo $students["city"];

$studentinfos = json_encode($students);
echo $studentinfos;     //{"name":"aung","age":31,"city":"mdy"}
var_dump($studentinfos);    //string(37) "{"name":"aung","age":31,"city":"mdy"}"

//can't print
echo $students["name"];
echo $students["age"];
echo $students["city"];


//=>decode by single parameter

$studentdatas = '{"name":"aung","age":31,"city":"mdy"}';
$studentdecode = json_decode($studentdatas);
var_dump($studentdecode);   //object(stdClass)#1 (3) {["name"]=>  string(4) "aung" ["age"]=> int(31) ["city"]=> string(3) "mdy" }

//can't print
echo $studentdecode["name"];
echo $studentdecode["age"];
echo $studentdecode["city"];

//can print (object->stdClass) (-> object operator)
echo $studentdecode->name;
echo $studentdecode->age;
echo $studentdecode->city;

foreach($studentdecode as $key=>$value){
    echo $key . " is ". $value . " <br/> "; //name is aung <br/> age is 31 <br/> city is mdy <br/> 
}


//=>decode by multi parameter

$staffdatas = '{"name":"aung","age":31,"city":"mdy"}';
$staffdecode = json_decode($staffdatas,true);

var_dump($staffdecode);     //array(3) { ["name"]=> string(4) "aung" ["age"]=> int(31) ["city"]=> string(3) "mdy"}

//can print
echo $staffdecode["name"];
echo $staffdecode["age"];
echo $staffdecode["city"];

//cannot print
echo $staffdecode->name;
echo $staffdecode->age;
echo $staffdecode->city;











?>