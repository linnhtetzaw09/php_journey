<?php


function myColor($color){

    if($color !== "red"){
        throw new Exception("I hate $color color");
    }

    return "Yes , my fav color is $color";

}

// echo myColor("black");

try{
    echo myColor("black");
}catch(Exception $e){
    echo "You should not try with this color";
}

try{
    echo myColor("black");
}catch(Exception $e){
    echo $e->getMessage();
}

try{
    echo myColor("red");
}catch(Exception $e){
    echo $e->getMessage();
}


function myPower($base,$power){

    if($power > 6){
        throw new Exception("We don't allow over $power");
    }

    $result = pow($base,$power);
    return $result;
}

try{
    echo myPower(2,6);
}catch(Exception $e){
    echo "You should not over .". $e->getMessage();
}

try{
    echo myPower(2,3);
}catch(Exception $e){
    echo "You should not over .". $e->getMessage();
}



function myCal($base,$power){

    if($power > 3){
        throw new Exception("We don't allow over $power");
    }

    $result = pow($base,$power);
    return $result;
}

try{
    echo myCal(2,4);
}catch(Exception $e){
    echo "You should not over .". $e->getMessage();
}finally{
    echo "<br/>";
    echo "Hey i am joker";
}














?>