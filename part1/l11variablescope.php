<?php

//variables scope
// i. global scope or global variable
    // ii. local variable scope
    // iii. static variable scope

    $num1 = 200;  //global scope

    function funone(){
        echo "global variable print outside = $num1"; 
    }

    funone(); //global variable print in function = no print out $num1 cuz function will generate an error

    echo "global variable print outside = $num1";

    function funtwo (){
        $num2 = 100; //local variable

        echo "local variable print in function = $num2";
    }

    funtwo();

    echo "local variable print outside = $num2"; //local variable print outside = no print out $num2


    //=> global keyword
    $num3 = 300;
    $num4 = 400;

    function funthree(){

        // global $num3;
        // global $num4;

        global $num3,$num4;
        global $result;
        
        $result = $num3 + $num4;
        echo "thi is result, print by funthree = $result"; //700
    }

    funthree();
    
    echo "local variable print outside = $result"; //700


    //=> super global variable

    $num5 = 500;
    $num6 = 600;

    function funfour(){

        // global $num5,$num6;

        $GLOBALS["sum"] = $GLOBALS["num5"] + $GLOBALS["num6"];
        echo "this is sum, inside funfour = $sum";  //undefined variable : sum
    }

    funfour();

    echo "local variable print outside = $sum"; //1100


    $num7 = 700;

    function funfive(){
        global $num7;

        $num7++;
        echo $num7;  
    }

    funfive();  //701
    funfive(); //702
    funfive();  //703


    function funsix(){
        $num8 = 800;

        $num8++;
        echo $num8;
    }

    funsix();  //801
    funsix();  //801
    funsix();  //801


    //=> static keyword
    function funseven(){
       static $num9 = 900;

        $num9++;
        echo $num9;
    }

    funseven();  //901
    funseven();  //902
    funseven();  //903


    //=> passing by reference (pr &)

    $num10 = 1000;

    function funeight($num10){
        $num10 = 999;
        echo $num10;
    }

    echo $num10; // 1000
    funeight($num10);  // 999
    echo $num10; // 1000


    $num11 = 110;

    function funnine(&$num11){
        $num11 = 1100;
        echo $num11;
    }

    echo $num11; //110
    funnine($num11);  //1100
    echo $num11; //1100


    $name = "lin htet";
    $fullname = "zaw";
    
    function funten(&$val){
        $val = "chan chan";
        echo $val;
    }

    echo $name;  //lin htet
    funten($name);  //chan chan
    echo $name;     //chan chan
    echo $name;     //chan chan
    echo $fullname;  //zaw
    funten($fullname);

?>