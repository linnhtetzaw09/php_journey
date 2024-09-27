<?php


require_once ("./Video.php");
require_once ("./Music.php");
require_once ("./gallery/Photo.php");


$musicobj = new Music();
$musicobj->play();

$videopbj = new Video();
$videopbj->play();

$photoobj = new Photo();
$photoobj->play();





?>