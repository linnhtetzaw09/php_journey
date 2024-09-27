<?php

//=>check variable type

//=>is_string(variable) function

$val1 = "Save Myanmar";
echo "val1 is ".is_string($val1);   //1
echo var_dump($val1);   //string(12) "Save Myanmar"
echo gettype($val1);    //string

$val2 = 0;
echo "val2 is ".is_string($val2);   //0

$val3 = 50;
echo "val3 is ".is_string($val3);   //0

$val4 = "50";
echo "val4 is ".is_string($val4);   //1

$val5 = true;
echo "val5 is ".is_string($val5);

$val6 = "";
echo "val6 is ".is_string($val6);   //1



//=>is_numeric(variable) function

$val7 = 36;
echo "val7 is ".is_numeric($val7);  //1
echo "val7 is ".is_int($val7);      //1
echo "val7 is ".is_integer($val7);  //1
echo gettype($val7);    //integer

$val8 = 36.78;
echo "val8 is ".is_numeric($val8);  // 1
echo "val8 is ".is_int($val8);  
echo "val8 is ".is_integer($val8);
echo gettype($val8);    //double


//***************
$val9 = "59";
echo "val9 is ".is_numeric($val9);  // 1
echo "val7 is ".is_int($val9);      
echo "val7 is ".is_integer($val9);



//=>is_float(variable) function

$val9 = 40;
echo "val9 is ".is_float($val9);  

$val10 = 40.78;
echo "val10 is ".is_float($val10);  // 1

$val11 = "40.78";
echo "val11 is ".is_float($val11); 



//=>is_bool(variable)  function

$val12 = true;
echo "val12 is ".is_bool($val12);  // 1

$val13 = false;
echo "val13 is ".is_bool($val13);  // 1
echo gettype($val13);    //boolean

$val14 = FALSE;
echo "val14 is ".is_bool($val14);  // 1

$val15 = 1;
echo "val15 is ".is_bool($val15);  

$val16 = "true";
echo "val16 is ".is_bool($val16);  


//=>is_array(variable) function

$val17 = "Welcome to Myanmar";
echo "val17 is ".is_array($val17); 

// $val18 = ["lin","htet","zaw"];
$val18 = array("lin","htet","zaw");
echo "val18 is ".is_array($val18);  //1
echo gettype($val18);    //array


//=>is_null(variable) function

$val19 = 0;
echo "val19 is ".is_null($val19); 

$val20 = null;
echo "val20 is ".is_null($val20);   //1

$val21 = NULL;
echo "val21 is ".is_null($val21);   //1

$val22 = Null;
echo "val22 is ".is_null($val22);   //1

$val23 = "null";
echo "val23 is ".is_null($val23);   



//=>empty(variable) function  Vs isset(variable) function

// Note:: the following values values are empty
// 0, 0.0, "0", "", null, false, []

$val24 = [];
if(empty($val24)){
    echo "val24 is empty";
}else{
    echo "val24 is not empty";
}

//isset ka click, button, etc check lo ya tl
if(isset($val24)){
    echo "val24 have values";
}else{
    echo "val24 dose not have values";
}

$val24 = 0;
if(empty($val24)){
    echo "val24 is empty";
}

$val24;
if(empty($val24)){
    echo "val24 is empty";
}


//isset()  Vs unset()

// $city;
$city = "Yangon";
$country = "Thailand";
// echo isset($city) ? "Yes" : "No";
echo $city; //Yangon
echo $country;  //Thailand

unset($city,$country);
echo $city; 
echo $country;


?>