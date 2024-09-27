<?php
//=>looping

//for,forEach,while,do..while

$colorsones = ["red","blue","white","black","gray"];

$colorsonekeys = array_keys($colorsones);
echo $colorsones;  //error
var_dump($colorsonekeys);


for($i=0; $i < count($colorsones);$i++){
    // echo $i;
    echo "This is index array or manual array by forloop = index key is ".$colorsonekeys[$i]."and value is =".$colorsones[$i]."<br/>";
}

foreach($colorsones as $colorsone){
    echo "This is indexed array or manual array by foreach = ".$colorsone;
}


foreach($colorsonekeys as $key=>$colorsone){
    echo "This is indexed array or manual array by foreach = index key is ".$key." and value is ".$colorsone;
}


$x = 0;
while($x < count($colorsones)){
    // echo $colorsones[$x];
    // $x++;

    // echo "This is indexed array or manual array by foreach = index key is ".$x." and value is ".$colorsones[$x];

//    echo "This is indexed array or manual array by foreach = index key is ".$colosonekey[$x]." and value is ".$colorsones[$x];
    $x++;

}

$y = 0;
do{
    echo "This is indexed array or manual array by foreach = index key is ".$y." and value is ".$colorsones[$y];
    // echo "This is indexed array or manual array by foreach = index key is ".$colosonekey[$y]." and value is ".$colorsones[$y];
    $y++;
}while($y< count($colorsones));


?>