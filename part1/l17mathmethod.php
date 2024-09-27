<?php

//=>abs(number)  function

echo abs(32); //32
echo abs(-32); //32
echo abs(32.78); //32.78
echo abs(-32.78); //32.78


//=>round(number)  function
//=>round(number,percision)  function

echo round(32.64);  //33
echo round(32.54);  //33
echo round(32.44);  //32
echo round(-32.64);  //-33
echo round(32.64325,2);  //32.64
echo round(32.64365,2);  //32.64
echo round(32.64765,2);  //33.65


//=>ceil(number)  function

echo ceil(32.64);  //33
echo ceil(32.54);  //33
echo ceil(32.44);  //33

//*** 
echo ceil(-32.64);  //-32
echo ceil(-32.54);  //-32


//=>floor(number)  function

echo floor(32.64);  //32
echo floor(32.54);  //32
echo floor(32.44);  //32

//*** 
echo floor(-32.64);  //-33
echo floor(-32.34);  //-33


//=>max(number) function

echo max(2,3,7,5,8,9);  //9
echo max(2,3,-74,5,65,78);  //78
echo max(2,38,-7,5,-8,"97");  //97
echo max([4,7,-56,"89",-76,20]); //89


//=>min(number) function

echo min(2,3,7,5,8,9);  //2
echo min(2,3,-74,5,65,78);  //-74
echo min(2,38,-7,5,-8,"97");  //-7
echo min([4,7,-56,"89",-76,20]); //-76


//=>pow(base,exponet) function

echo pow(2,3); //8
echo pow(3,4); //81


//=>log(number,base) logarithm function

echo log(10,2); //3.32....
echo log(20,2); //4.321....
echo log(80,3); //3.9....


//=>sqrt(number) function

echo sqrt(9); //3
echo sqrt(4); //2
echo sqrt(0.81); //0.9
echo sqrt(-4); //NAN


//=>rand() function

echo rand(); //
echo rand(); //


//=>getrandmax() function

echo getrandmax(); //


//=>rand(min,max) function

echo rand(100,1000);    //

$users = ["lin","aung","su","nu","kyaw","mu"];
echo $users[rand(0,5)]; //


//=>microtime(min,max) function  //a very short interval of time, as 0.01 million of second
//=>microtime(true)

echo microtime();   //
echo microtime(true);   //something ko unique phit say chin yin use tl eg.photos,videos...

//=>uniqid() function

echo uniqid(); 


//=> number_format(number,decimals) function
//=> number_format(number,decimals,decimal-separator,thousand-separator) function

echo number_format(1500,2);     //1,500.00
echo number_format(12600,2);     //12,600.00
echo number_format(1266000,2,',','.');     //1.266.000,00
echo number_format(1266000,2,'.','-');     //1-266-000.00










?>