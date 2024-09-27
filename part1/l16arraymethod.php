<?php

//=>array_combine(key,value) function
$names = ["lin","htet","zaw"];
$ages = [23,34,89];

$result = array_combine($names,$ages);
echo "<pre>".print_r(array_combine($names,$ages),true)."</pre>";
echo $result["zaw"]; //89


//=>count(array) function
$cars = ["toyota","honda","suzuki","ford","bmw","honda"];
echo count($cars);  //6

//sizeof(array) function
$colors = ['red','green','black','purple','brown'];
echo sizeof($colors);   //5

//=>array_count_values(array) function
$motors = ["toyota","honda","suzuki","ford","bmw"];
echo count($motors);    //5
echo "<pre>".print_r(array_count_values($motors),true)."</pre>";  //all 1

$brands = ["toyota","honda","suzuki","ford","bmw","audi","honda","suzuki"];
echo "<pre>".print_r(array_count_values($brands),true)."</pre>"; //hond 2 suzuki 2 and other 1


//=>array_chunk(array,length) function
//=>array_chunk(array,length,preservekey) function
//preserve key = true/false
$couples = ["lin","zaw","chan","hein","tun","htet","aung"];
$result1 = array_chunk($couples,2);
echo "<pre>".print_r($result1,true)."</pre>";
echo $result1[0][1]; //zaw

$result2 = array_chunk($couples,2,true);
echo "<pre>".print_r($result2,true)."</pre>"; //0 1 2 3 4 5

$result3 = array_chunk($couples,2,false);
echo "<pre>".print_r($result3,true)."</pre>";  //01 01 01 01



//=>array_diff(array1,array2,.....) function
// no need to think index or key name
$colors1 = ["red","green","pink","blue"];
$colors2 = ["red","green","brown","black"];
$colors3 = ["red","purple","pink","mint"];

echo "<pre>".print_r(array_diff($colors1,$colors2),true)."</pre>"; //[2] => pink  [3] => blue

echo "<pre>".print_r(array_diff($colors2,$colors1),true)."</pre>";   // [2] => brown  [3] => black

echo "<pre>".print_r(array_diff($colors1,$colors2,$colors3),true)."</pre>";  //[3] => blue

$col1 = ["a"=>"red","b"=>"green","c"=>"blue","d"=>"pink"];
$col2 = ["e"=>"red","f"=>"green","g"=>"white"];
echo "<pre>".print_r(array_diff($col1,$col2),true)."</pre>"; //[c] => blue [d] => pink
echo "<pre>".print_r(array_diff($col2,$col1),true)."</pre>"; // [g] => white


//=>array_diff_assoc(array1,array2,.....) function
// need to consider index or key value for assoc
$col1 = ["a"=>"red","b"=>"yellow","c"=>"blue","d"=>"green"];
$col2 = ["a"=>"red","b"=>"green","c"=>"blue"];
echo "<pre>".print_r(array_diff_assoc($col1,$col2),true)."</pre>"; //[b] => yellow [d] => green
echo "<pre>".print_r(array_diff_assoc($col2,$col1),true)."</pre>"; //[b] => green


//=>array_diff_key(array1,array2,.....) function
$col1 = ["a"=>"red","b"=>"yellow","c"=>"blue","d"=>"green","f"=>"pink"];
$col2 = ["a"=>"red","b"=>"green","c"=>"blue","e"=>"orange"];
echo "<pre>".print_r(array_diff_key($col1,$col2),true)."</pre>"; //[d] => green [f] => pink
echo "<pre>".print_r(array_diff_key($col2,$col1),true)."</pre>"; // [e] => orange


//=>array_intersect(array1,array2,.....) function
// no need to consider key name
$num1 = [10,20,30,40,50,60,70];
$num2 = array(10,20,50,40,80,90);
echo "<pre>".print_r(array_intersect($num1,$num2),true)."</pre>"; //[0] => 10 [1] => 20  [3] => 40 [4] => 50
echo "<pre>".print_r(array_intersect($num2,$num1),true)."</pre>"; //[0] => 10 [1] => 20  [3] => 50 [4] => 40

$col1 = ["a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow"];
$col2 = ["a"=>"red","f"=>"green","d"=>"orange"];
echo "<pre>".print_r(array_intersect($col1,$col2),true)."</pre>"; // [a] => red [b] => green
echo "<pre>".print_r(array_intersect($col2,$col1),true)."</pre>"; // [a] => red [b] => green


//=>array_fill(startindex,count,value) function
 echo "<pre>".print_r(array_fill(0,5,"green"),true)."</pre>"; //[0] => green [1] => green[2] => green [3] => green [4] => green
 echo "<pre>".print_r(array_fill(2,5,"pink"),true)."</pre>"; //[2] => pink [3] => pink [4] => pink [5] => pink [6] => pink


//=>array_fill_keys(keys,value) function
$keys = array("a","b","c","d");
$values = array("red","green","mint");
echo "<pre>".print_r(array_fill_keys($keys,"pink"),true)."</pre>"; // [a] => pink [b] => pink [c] => pink [d] => pink
echo "<pre>".print_r(array_fill_keys($keys,$values),true)."</pre>"; //[a] => Array  [0] => red  [1] => green  [2] => mint  [b] => Array [0] => red [1] => green [2] => mint [c] => Array [0] => red  [1] => green [2] => mint [d] => Array  [0] => red  [1] => green  [2] => mint


//=>array_key_exists(key,array) function just for assoc array
$operators = ["mpt"=>"ftth","ooredoo"=>"vpn"];

if(array_key_exists("mpt",$operators)){
    echo "key exists";
}else{
    echo "key does not exists";
}


//=>array_merge(array1,array2,array3,..) function 
$array1 = ["red","green"];
$array2= ["pink","yellow"];
$array3 = ["orange","black"];
echo "<pre>".print_r(array_merge($array1,$array2),true)."</pre>"; //[0] => red [1] => green [2] => pink [3] => yellow
echo "<pre>".print_r(array_merge($array1,$array2,$array3),true)."</pre>";  //[0] => red [1] => green [2] => pink [3] => yellow [4] => orange [5] => black


//=>array_keys[array,value] function
//=> array_keys[array,value,strict]

$phones = ["mpt"=>"ftth","ooredoo"=>"broad","telenor"=>"wifi"];

echo "<pre>".print_r(array_keys($phones),true)."</pre>"; //([0]=> mpt   [1]=>ooredoo  [2]=>telenor)
echo array_keys($phones)[1];    //ooredoo

echo "<pre>".print_r(array_keys($phones,"broad"),true)."</pre>";    //([0] => ooredoo)
echo array_keys($phones,"broad")[0];  //ooredoo


$numbers = [10,20,30,'40'];
echo "<pre>".print_r(array_keys($numbers,'10'),true)."</pre>"; //[]
echo "<pre>".print_r(array_keys($numbers,10),true)."</pre>"; //[0] => 0 

echo "<pre>".print_r(array_keys($numbers,'10',false),true)."</pre>"; //[]
echo "<pre>".print_r(array_keys($numbers,10,false),true)."</pre>"; //[0] => 0 

echo "<pre>".print_r(array_keys($numbers,10,true),true)."</pre>"; //[0] => 0 
echo "<pre>".print_r(array_keys($numbers,'10',true),true)."</pre>"; //[]



//=>array_map(callback,array1,array2,.....) function

$males = array("lin","htet","zaw","chan","hein");
$females = array("su","nu","hla","mya","myo");

function genderone($name){
    return ("Mr.".$name);
}

function gendertwo($male,$female){
    return ($male."&".$female);
}

echo "<pre>".print_r(array_map("genderone",$males),true)."</pre>";  

echo "<pre>".print_r(array_map("gendertwo",$males,$females),true)."</pre>";


//=>sort(array)  function

$cars = ["bmw","suzuki","toyota","hondai","mercedee"];
sort($cars);
echo "<pre>".print_r($cars,true)."</pre>";

$digits = [30,29,50,'39',370,90,56];
sort($digits);
echo "<pre>".print_r($digits,true)."</pre>";


//=>array_multisort(array)  function

$carbrand = ["bmw","suzuki","toyota","hondai","mercedee"];
array_multisort($carbrand);
echo "<pre>".print_r($carbrand,true)."</pre>";

$pins = [30,29,50,'39',370,90,56];
array_multisort($pins);
echo "<pre>".print_r($pins,true)."</pre>";


//=>array_reverse(array) function

$vehicles = ["bmw","suzuki","toyota","hondai","mercedee"];
sort($vehicles);
echo "<pre>".print_r(array_reverse($vehicles),true)."</pre>";

$lucknums = [30,29,50,'39',370,90,56];
sort($lucknums);
echo "<pre>".print_r(array_reverse($lucknums),true)."</pre>";


//=>array_pad(array,length,value) function

$colors = ["red","blue","pink"];
echo "<pre>".print_r(array_pad($colors,5,"blue"),true)."</pre>";



//=>array_reduce(array,callback,initial) function
$phnumbs = [29,'39',"89",90,37];
function calfun($total,$val){
    return $total+=$val;
}

echo array_reduce($phnumbs,"calfun",0);

//=>array_sum(array) function

$nums = [10,20,30,40,50];
echo array_sum($nums); //150

$nums = [10,20,30,"40",-50];
echo array_sum($nums); //50

$nums = ["a"=>10.2,"b"=>20.3,"c"=>30.3];
echo array_sum($nums); //60.8


//=>array_search(value,array) function

$alphabets = ['a','b','c','d','e'];
echo array_search('d',$alphabets);

$words = ['a'=>"red",'b'=>'blue','c'=>"yellow",'d'=>"white",'e'=>"orange"];
echo array_search('orange',$words);


//=>array_pop(array) function
$rainbow = ['red','green','blue','purple'];
array_pop($rainbow);
echo "<pre>".print_r($rainbow,true)."</pre>";  //red green blue

//=>array_shift() function

$colors = ['red','green','blue','purple'];
array_shift($colors);
echo "<pre>".print_r($colors,true)."</pre>";  //green blue purple
echo "<pre>".print_r($colors,true)."</pre>";  // blue purple

$colors= ['a'=>'red','b'=>'green','c'=>'black',"d"=>"white"];
echo array_shift($colors);
echo "<pre>".print_r($colors,true)."</pre>";  //'b'=>'green','c'=>'black',"d"=>"white"

//=>unset(array[]) function and array_values(array) function
$colors = ['red','green','purple'];
// unset($colors[1]);
// echo "<pre>".print_r($colors,true)."</pre>"; //red purple

unset($colors[1]);
echo "<pre>".print_r(array_values($colors),true)."</pre>"; // [0] => red [1] => purple

$colors = ['a'=>'red','b'=>'green','c'=>'black','d'=>'white','e'=>'brown'];
// echo "<pre>".print_r(array_values($colors),true)."</pre>";  //[0] => red [1] => green [2] => black [3] => white [4] => brown

unset($colors['c']);
echo "<pre>".print_r(array_values($colors),true)."</pre>"; //[0] => red [1] => green [2] => white [3] => brown


//=>array_unshift(array,value1,value2,...) function

$colors = ['red','green','black'];
echo array_unshift($colors,"gold",'crystal');
echo "<pre>".print_r($colors,true)."</pre>";

$colorsone = ['0'=>'red','1'=>'green','2'=>'black'];
echo array_unshift($colorsone,"gold",'crystal');
echo "<pre>".print_r($colorsone,true)."</pre>";

$colorsone = ['a'=>'red','b'=>'green','c'=>'black'];
echo array_unshift($colorsone,"gold",'crystal');
echo "<pre>".print_r($colorsone,true)."</pre>";


//=>array_push(array,value1,value2,...) function

$colors = ['red','green','black'];
echo array_push($colors,"gold",'crystal');
echo "<pre>".print_r($colors,true)."</pre>";

$colorsone = ['0'=>'red','1'=>'green','2'=>'black'];
echo array_push($colorsone,"gold",'crystal');
echo "<pre>".print_r($colorsone,true)."</pre>";

$colorsone = ['a'=>'red','b'=>'green','c'=>'black'];
echo array_push($colorsone,"gold",'crystal');
echo "<pre>".print_r($colorsone,true)."</pre>";


//=>array_slice(array,offset/index) function
//=>array_slice(array,offset/index,length) function
//=>array_slice(array,offset/index,length,preserve) function

$candycolors = ["red","gray","blue","pink","white"];

echo "<pre>".print_r(array_slice($candycolors,0),true)."</pre>"; //red to white
echo "<pre>".print_r(array_slice($candycolors,2),true)."</pre>"; //blue to white

echo "<pre>".print_r(array_slice($candycolors,0,2),true)."</pre>"; //red to gray
echo "<pre>".print_r(array_slice($candycolors,2,2),true)."</pre>"; //blue to pink
echo "<pre>".print_r(array_slice($candycolors,2,5),true)."</pre>"; //blue to white

echo "<pre>".print_r(array_slice($candycolors,2,5,true),true)."</pre>"; //blue to white


//=>array_splice(array,offset/index) function
//=>array_splice(array,offset/index,length) function
//=>array_splice(array,offset/index,length,array) function

$shirtcolors = ["red","gray","blue","pink","white"];

echo "<pre>".print_r(array_splice($shirtcolors,0),true)."</pre>"; //red to white
echo "<pre>".print_r(array_splice($shirtcolors,2),true)."</pre>"; //blue to white

echo "<pre>".print_r(array_splice($shirtcolors,0,2),true)."</pre>"; //red to gray
echo "<pre>".print_r(array_splice($shirtcolors,2,2),true)."</pre>"; //blue to pink
echo "<pre>".print_r(array_splice($shirtcolors,2,5),true)."</pre>"; //blue to white

echo "<pre>".print_r(array_splice($shirtcolors,2,5),true)."</pre>"; //blue to white

$boys = ["mgmg","lin","zaw","kyaw","hein"];
$girls = ["mama","su","nu"];

// array_splice($boys,0,2,$girls);
// echo "<pre>".print_r($boys,true)."</pre>"; 

array_splice($boys,0,3,$girls);
echo "<pre>".print_r($boys,true)."</pre>"; 

array_splice($boys,1,3,$girls);
echo "<pre>".print_r($boys,true)."</pre>"; 


//=>array_uniqlue() function

$num = [10,20,30,50,10,30,60,70,80,10];
echo "<pre>".print_r(array_unique($num),true)."</pre>"; //[0] => 10 [1] => 20 [2] => 30 [3] => 50 [6] => 60 [7] => 70[8] => 80

$cookies = ["a"=>"red","b"=>"green","c"=>"blue","d"=>"red","e"=>"blue"];
echo "<pre>".print_r(array_unique($cookies),true)."</pre>"; //[a] => red [b] => green [c] => blue


//=>array_walk(array,callbackfun) function
//=>array_walk(array,callbackfun,parameter) function

$colours = ['a'=>'red','b'=>'green','c'=>'black','d'=>'pink','e'=>'white'];

function myfunone($val,$key){
    echo "Key is $key and Value is $val";
}

array_walk($colours,"myfunone"); //Key is a and Value is redKey is b and Value is greenKey is c and Value is blackKey is d and Value is pinkKey is e and Value is white

function myfuntwo($val,$key,$p){
    echo "Key is $key and Value is $val $p.";
}

array_walk($colours,"myfuntwo","color"); //Key is a and Value is red color.Key is b and Value is green color.Key is c and Value is black color.Key is d and Value is pink color.Key is e and Value is white color.

function myfunthree (&$val){
    return $val = "orange";
}

array_walk($colours,"myfunthree");
echo "<pre>".print_r($colours,true)."</pre>"; //[a] => orange [b] => orange [c] => orange [d] => orange [e] => orange


//compact(var1,var2,var3,...) function

$name = "lin htet";
$age = "23";
$city = "Yangon";

$result = compact("name","age","city");
// echo $result;
echo "<pre>".print_r($result,true)."</pre>";  //[name] => lin htet [age] => 23 [city] => Yangon


//range(start,end) function
//range(start,end,step) function

$num1 = range(0,5);
echo "<pre>".print_r($num1,true)."</pre>"; //[0] => 0 [1] => 1 [2] => 2 [3] => 3 [4] => 4 [5] => 5

$num2 = range(0,50,10);
echo "<pre>".print_r($num2,true)."</pre>"; // [0] => 0 [1] => 10 [2] => 20 [3] => 30 [4] => 40 [5] => 50

$char = range("a","g");
echo "<pre>".print_r($char,true)."</pre>"; //[0] => a [1] => b [2] => c [3] => d [4] => e [5] => f [6] => g

$char2 = range("g","c");
echo "<pre>".print_r($char2,true)."</pre>"; //[0] => g [1] => f [2] => e [3] => d [4] => c


//=>current(), pos(), next(), end(), prev(), reset() function
$students = ['aung','zaw','lin','shin','kyaw'];
echo current($students);    //aung
echo pos($students);    //aung

echo end($students);    //kyaw
echo current($students);    //kyaw

echo current($students);    //aung
echo pos($students);    //aung
echo next($students);    //zaw
echo current($students);    //zaw
echo next($students);    //lin
echo prev($students);    //zaw

echo end($students);    //kyaw
echo current($students);    //kyaw
echo prev($students);    //shin

echo reset($students);    //aung


//=>serialize(), unserialize() function

$staffs = [
    ['aung','ye','lin','aung','hein'],
    ['su','nu','hla','mya','aye']
];

echo "<pre>".print_r($staffs,true)."</pre>";

$seriadatas = serialize($staffs);
echo $seriadatas;  //like json object
var_dump($seriadatas);  //string 

$unseriadatas = unserialize(($seriadatas));  // [0] => Array ([0] => aung [1] => ye [2] => lin [3] => aung [4] => hein)  [1] => Array ( [0] => su [1] => nu [2] => hla [3] => mya [4] => aye )

?>