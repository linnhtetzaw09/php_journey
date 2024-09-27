<?php

//array
//(i)Indexed array (manual array)
//(ii)Associated array
//(iii)Multidimensional array

$names = array("aung","maung","zaw","kyaw","lin");
//echo $names;  //error
//print $names;   //error

echo count($names);  //5
var_dump($names);
print_r($names,false);


$colors = ["red","black","green","purple"];

echo count($colors);  //4
print_r($colors,false);

echo "<pre>".print_r($colors,true)."</pre>";

$colors[4] = "pink";
$colors[0] = "white";

echo count($colors);

//-------------------------------------------------

// (ii)Associated array
//array with key name

$news = array("post1" => "this is post1","post2" => "this is post2","post3" => "this is port3");
var_dump($news);    //3
echo count($news);

$medias = [
    "post1" => "this is post1",
    "post2" => "this is post2",
    "post3" => "this is port3"
];

echo count($medias);    //3
var_dump ($medias);

$medias ["post4"] = "this is post4";
$medias ["post3"] = "this is new post3";

echo count($medias);    //4
var_dump ($medias);

echo "i like this post, post title is ".$medias["post3"];

//--------------------------------------------

// (iii)Multidimensional array
//arrays contains one or more arrays

$paints = array(
    array("red","white"),
    array("black","orange"),
    array("blue","brown")
);

echo count($paints);    //3
var_dump($paints);

$maincolors = [
    ["red","white"],
    ["black","orange"],
    ["blue","brown"]
];

echo count($maincolors);    //3
var_dump($maincolors);

echo $maincolors [0] [0]; //red
echo $maincolors [1] [1]; //orange
echo $maincolors [2] [1]; //brown


$persons = array(
    array("name" => "aung","age" =>20),
    array("name" => "maung","age" =>26),
    array("name" => "saung","age" =>27)
);

echo count($persons);   //3
var_dump($persons);

$vippersons = [
    ["name" => "aung","age" =>20],
    ["name" => "maung","age" =>26],
    ["name" => "saung","age" =>27]
];

echo count($vippersons);
var_dump($vippersons);

echo $vippersons[0]["name"];   //aung
echo $vippersons[0]["age"];   //20

echo $vippersons[2]["name"];   //saung
echo $vippersons[1]["age"];   //26



?>