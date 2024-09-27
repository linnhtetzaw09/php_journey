<?php
ini_set('display_error',1);

require_once("./Customload.php");

use gallery\slideshow as viewer;
use gallery\slideshow\Image;


Customload::loader("Music");
$musicobj = new Music();
$musicobj->play();

Customload::loader("Video");
$videopbj = new Video();
$videopbj->play();

Customload::loader("gallery\Photo");
$photoobj = new gallery\Photo();
$photoobj->play();

Customload::loader("gallery\animateshow\Portrait");
$portrait = new gallery\animateshow\Portrait;
$portrait->play();

Customload::loader("gallery\slideshow\Image");
$picture = new Image;
$picture->play();

Customload::loader("gallery\slideshow\Picture");
$image = new viewer\Picture;
$image->play();


?>