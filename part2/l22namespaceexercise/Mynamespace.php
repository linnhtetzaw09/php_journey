<?php

ini_set('display_errors',1);

// echo __DIR__;           //C:\xampp\htdocs\phplessons\part2\l22namespaceexercise

spl_autoload_register(function($classname){

    echo "Loading the class = {$classname} <br/>";
                     // replace , new, string
    $file = str_replace("\\", "/", $classname) . ".php";
    echo $file . "<br/>";

    if(file_exists($file)){
        require_once(__DIR__."/".$file);
    }else{
        echo "No file exist";
    }

});


use gallery\slideshow\Picture;
use gallery\slideshow as viewer;


$musicobj = new Music();
$musicobj->play();

$videopbj = new Video();
$videopbj->play();

$photoobj = new gallery\Photo();
$photoobj->play();

$portrait = new gallery\animateshow\Portrait;
$portrait->play();

$picture = new Picture;
$picture->play();

$image = new viewer\Image;
$image->play();


?>