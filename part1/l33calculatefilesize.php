<?php

ini_set('display_errors',1);

function getFileSizeMethod1($fileSize){
    
    // return $fileSize;

    if(is_numeric($fileSize)){

        $fixNum = 1024;
        $idx = 0;
        $prefix = ['B','Kb','Mb','Gb','Tb','Pb','Eb','Zb','Yb'];

        while(($fileSize/$fixNum) > 0.9){
            $fileSize = $fileSize/$fixNum;
            $idx++;
        }

        return round($fileSize,2).' '. $prefix[$idx];

    }else{
        return "NaN";
    }

}

echo getFileSizeMethod1(39493098);     //bit

echo "<hr/>";


function getFileSizeMethod2($fileSize){
    
    // return $fileSize;

    if(is_numeric($fileSize)){

        $fixNum = 1024;
        $idx = 0;
        $prefix = ['B','Kb','Mb','Gb','Tb','Pb','Eb','Zb','Yb'];

        if($fileSize < $fixNum){
            return $fileSize. ' ' . $prefix[$idx];
        }else{

            while($fileSize > $fixNum){
                $fileSize = round($fileSize/$fixNum,2);
                $idx++;
            }
    
            return $fileSize.' '. $prefix[$idx];

        }

    }else{
        return "NaN";
    }

}

echo getFileSizeMethod2(587584);     //bit

echo "<hr/>";

function getFileSizeMethod3($fileSize){

    $size = filesize($fileSize);    // 2513 bit, filesize() is php default function

    $fixNum = 1024;
    $prefix = ['B','Kb','Mb','Gb','Tb','Pb','Eb','Zb','Yb'];

    $power = $size > 0 ? floor(log($size,$fixNum)) : 0;
                        // log(2513,1024) => 1.54245
                        // floor(log(2513,1024)) => 1
    
    $result = round($size/pow($fixNum,$power),2). ' ' . $prefix[$power];

    return $result; // Returning the calculated size, not the original $size

}

echo getFileSizeMethod3("./l7array.php"); 
 






?>