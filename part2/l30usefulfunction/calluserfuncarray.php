<?php

ini_set('display_errors',1);

echo "This is call_user_fun_array() <br/>";


function funOne($num1,$num2){
    echo __FUNCTION__, " values are {$num1} and {$num2} <br/>";
}

funOne(10,20);      //funOne values are 10 and 20
// call_user_func_array(callback,array)
call_user_func_array("funOne",[100,200]);       //funOne values are 100 and 200
call_user_func_array("funOne",array(50,40));    //funOne values are 50 and 40


class HiFi{
    function funTwo($num1,$num2){
        echo __METHOD__, " values are {$num1} and {$num2} <br/>";
    }
}

$obj = new HiFi;
$obj->funTwo(100,200);      //HiFi::funTwo values are 100 and 200
// call_user_func_array([class,method],array)
call_user_func_array([$obj,"funTwo"],array(60,70));     //HiFi::funTwo values are 60 and 70
call_user_func_array([$obj,"funTwo"],[89,90]);          //HiFi::funTwo values are 89 and 90







echo "<hr/>";


?>