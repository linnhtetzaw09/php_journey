<?php

//=>settype(variable,type) function

$val1 = "50";
echo gettype($val1);    //string
echo settype($val1,"integer");
echo gettype($val1);    //integer

$val2 = 100;
echo gettype($val2);    //integer
echo settype($val2,"string");
echo gettype($val2);    //string

$val3 = true;
echo gettype($val3);    //boolean
echo settype($val3,"integer");
echo gettype($val3);    //integer

$val4 = false;
echo gettype($val4);    //boolean
echo settype($val4,"string");
echo gettype($val4);    //string


?>