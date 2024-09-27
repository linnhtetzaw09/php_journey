<?php

//=>super gloabal variables
// 1. $GLOBALS
// 2. $_SERVER
// 3.$_REQUEST
// 4. $_POST
// 5. $_GET
// 6. $_FILES
// 7. $_ENV
// 8. $_COOKIE
// 9, $_SESSION


//=>1. GLOBALS

$x = 100;
$y = 200;

//error
// function sumresult(){
//     $total = $x+$y;
//     return $total;
// }

// echo sumresult();
// echo $total;

function sumresult(){
    $GLOBALS["total"] = $GLOBALS["x"] + $GLOBALS["y"];
    return $GLOBALS["total"];
}

echo sumresult();  //300
echo $total;   //300
echo $GLOBALS["total"]; //300

echo "<hr/>";


//2.$_SERVER

echo $_SERVER["PHP_SELF"];  //***phplessons/part1/l12superglobalvariable.php
echo "<hr/>";
echo $_SERVER["HTTP_USER_AGENT"];  //***Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36
echo "<hr/>";
echo $_SERVER["HTTP_HOST"];  //***/ localhost
echo "<hr/>";
echo $_SERVER["SERVER_NAME"];  //***localhost (return domain name eg, www.yourdomain.com)
echo "<hr/>";
echo $_SERVER["SERVER_SOFTWARE"];  //Apache/2.4.58 (Win64) OpenSSL/3.1.3 PHP/8.2.12
echo "<hr/>";
echo $_SERVER["SERVER_PORT"];  //***80
echo "<hr/>";
echo $_SERVER["SERVER_PROTOCOL"];  //HTTP/1.1
echo "<hr/>";
echo $_SERVER["SERVER_SIGNATURE"];  //***Apache/2.4.58 (Win64) OpenSSL/3.1.3 PHP/8.2.12 Server at localhost Port 80
echo "<hr/>";
echo $_SERVER["REQUEST_METHOD"];  //***GET
echo "<hr/>";
echo $_SERVER["REMOTE_ADDR"];  //::1
echo "<hr/>";
echo $_SERVER["SCRIPT_FILENAME"];  //***C:/xampp/htdocs/phplessons/part1/l12superglobalvariable.php
echo "<hr/>";
echo $_SERVER["SCRIPT_NAME"];  ///***phplessons/part1/l12superglobalvariable.php
echo "<hr/>";
echo $_SERVER["QUERY_STRING"];  //http://localhost/phplessons/part1/l12superglobalvariable.php?AUNGAUNG
echo "<hr/>";

























?>