<?php


echo $_COOKIE;      //Array

echo "<pre>".print_r($_COOKIE,true)."</pre>";

if(isset($_COOKIE['mmk'])){
    echo "mmk stand for ". $_COOKIE['mmk']."<br/>";
}

if(isset($_COOKIE['yen'])){
    echo "yen stand for ". $_COOKIE['mmk']."<br/>";
}





?>

