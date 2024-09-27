<?php


//=>constant variable

// define (variablename,value);
// string/int/boolean/float oki
// variablename should be uppercase 
//redefine are not denied

define ('FULLNAME','Lin Htet Zaw');
echo FULLNAME;  //Lin Htet Zaw

// define ('FULLNAME','Chan Hein Htun');
// echo FULLNAME;  //Lin Htet Zaw


define ('DB_HOST',"localhost");
define ("DB_USER","root");
define ("DB_PASS","12345678");
define ("DB_NAME","PHPdbone");

echo DB_HOST;
echo DB_USER;
echo DB_PASS;
echo DB_NAME;


//=>constant(variablename) function

echo constant("DB_HOST");
echo constant("DB_USER");
echo constant("DB_PASS");
echo constant("DB_NAME");


//=>CONSTANT : const keyword
// string/int/boolean/float oki
// variablename should be uppercase 
//redefine are not denied

const MESSAGE = "Hello sir. how are you?";
echo MESSAGE;
echo constant("MESSAGE");

// const MESSAGE = "Hello mis. how are you?";
// echo MESSAGE;
// echo constant("MESSAGE");







?>