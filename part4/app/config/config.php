<?php

echo "  i am working <br/>";


define('APPNAME','PHP OOP Project');
define('URLROOT','http://localhost/phplessons/part4');

// app url
// echo __FILE__;  // C:\xampp\htdocs\phplessons\part4\app\config\config.php
// echo dirname(__FILE__);  // C:\xampp\htdocs\phplessons\part4\app\config\config
// echo dirname(dirname(__FILE__));  // C:\xampp\htdocs\phplessons\part4\app

define('APPURL',dirname(dirname(__FILE__)));

// db access
define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','L!nhtetz@w492OO2');
define('DB_NAME','phpdbsix');





?>