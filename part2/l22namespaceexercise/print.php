<?php

ini_set('display_errors',1);

require_once ("./Video.php");
require_once ("./Music.php");
require_once ("./gallery/Photo.php");   //Method 1  Method 2

require_once ("./gallery/animateshow/Portrait.php");  

use gallery\Photo;  //Method 2
use gallery\animateshow\Portrait;

$musicobj = new Music();
$musicobj->play();

$videopbj = new Video();
$videopbj->play();

// error with namespace
// $photoobj = new Photo();
// $photoobj->play();

//Method 1
$photoobj = new gallery\Photo();
$photoobj->play();

//Method 2
$photoobj = new Photo();
$photoobj->play();

// $portrait = new gallery\animateshow\Portrait;
// $portrait->play();

$portrait = new Portrait;
$portrait->play();


?>