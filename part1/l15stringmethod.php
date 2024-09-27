<?php


//=>strlen(string) function 

$words = "Hello lin";
echo strlen($words);    //9


//=>str_word_count(string) function 
//=>str_word_count(string,return) function
// 0 - default(string)
// 1 - return array
// 2 - return array

$word = "Hello Lin Htet Zaw";
echo str_word_count($word);     //4

echo str_word_count($word,0);     //4
echo "<pre>".print_r(str_word_count($word,1),true)."</pre>";     //array
echo "<pre>".print_r(str_word_count($word,2),true)."</pre>";     //array



//=>ucwords(string) function
//=>ucwords(string,delimiters) function
$country = "welcome to myanmar country,i live in maymyo";
echo ucwords($country);     //Welcome To Myanmar Country,i Live In Maymyo
echo ucwords($country,",");     //Welcome to myanmar country,I live in maymyo


//=>ucfirst(string) function
$message = "welcome to mandalay,i live in myanmar";
echo ucfirst($message);     //Welcome to mandalay,i live in myanmar


//=>lcfirst(string) function
$msg = "Welcome to mandalay,I live in myanmar";
echo lcfirst($msg);     //Welcome to mandalay,I live in myanmar


//=>strtoupper(string) function
$string = "welcome to our country";
echo strtoupper($string);       //WELCOME TO OUR COUNTRY


//=>strtolower(string) function
$str = "Welcome To Our Country";
echo strtolower($str);       //welcome to our country


//=>chunk_split(string,length,delimiters) function
$letters = "Myanmar Country";
echo chunk_split($letters,1,".");   //M.y.a.n.m.a.r. .C.o.u.n.t.r.y.
echo chunk_split($letters,3,"-");   //Mya-nma-r C-oun-try-


//=>substr(string,start(index/offset),end(length)) function
$task = "Welcome to Myanmar";
echo substr($task,0);   //Welcome to Myanmar
echo substr($task,8);   //to Myanmar
echo substr($task,11,7);   //Myanmar


//=>strpos(string,find) function
//=>strrpos(string,find) function
//=>stripos(string,find) function
//=>strripos(string,find) function
$captions = "Lorem Ipsum is simply dummy text of the printing and typesetting dummy industry";
echo strpos($captions,"dummy");     //22(index number)
echo strrpos($captions,"dummy");     //65(reverse index number)
echo stripos($captions,"Printing");     //40(index number)
echo strripos($captions,"Dummy");     //65(reverse index number)


//=>str_replace(search,replace,string) function  can cause case sensitive
$topic = "Hello Japan";
echo str_replace("Japan","Thailand",$topic);    //Hello Thailand


//=>substr_replace(string,replace,start index) function
//=>substr_replace(string,replace,start index,end length) function
$greeting  = "Minglarbar bya";
echo substr_replace($greeting,"How are you?",0);    //How are you?
echo substr_replace($greeting,"Nay Kaung lr",0,10);    //Nay Kaung lr bya
echo substr_replace($greeting,"Nay Kaung lr",11,12);    //Minglarbar Nay Kaung lr


//=>trim() function  (case sensitive)
//=>trim(string,characters) function
$title = " Welcome to My World ";
echo trim($title);      //Welcome to My World

$subtitle = "Welcome to My World";
echo trim($subtitle,"Wel");      //come to My World
echo trim($subtitle,"rld");      //Welcome to My Wo
echo trim($subtitle,"to");      //Welcome to My World


//=>ltrim() function
//=>ltrim(string,characters) function
$sayhi = "/Mingalarpr/";
echo ltrim($sayhi,"/");     //  Mingalarpr/

//=>rtrim() function
//=>rtrim(string,characters) function
$sayhello = "/Mingalarpr/";
echo rtrim($sayhello,"/");     //  /Mingalarpr


//=>str_repeat() function
//=>str_repeat(string,count) function
echo str_repeat("i love you",3);    //i love youi love youi love you


//=>str_cmp(string1,string2) function (case sensitive)
// 0 = if the two string are equal
// <0 = if string1 is less than string2
// >0 = if string1 is greater than string2

echo strcmp('i love my job','i love my job'); //0
echo strcmp('i love my job','i love '); //6
echo strcmp('i love','i love my job'); //-7


//=>explode(separator,string,limit) function
$words = "Welcome to my Country";
echo "<pre>".print_r(explode(" ",$words),true)."</pre>"; 
echo "<pre>".print_r(explode(" ",$words,0),true)."</pre>"; 
echo "<pre>".print_r(explode(" ",$words,1),true)."</pre>"; 
echo "<pre>".print_r(explode(" ",$words,2),true)."</pre>"; 
echo "<pre>".print_r(explode(" ",$words,3),true)."</pre>"; 


//=>implode(separator,array) function
$words = ["Welcome","to","my","city"];
echo implode(" ",$words);   //Welcome to my city
echo implode("-",$words);   //Welcome-to-my-city


//=>join(separator,array) function
$words = ["Welcome","to","my","village"];
echo join(" ",$words);  //Welcome to my village
echo join("_",$words);  //Welcome_to_my_village


//=>number_format(number) function
//=>number_format(number,decimals) function
echo number_format("2345322");  //2,345,322
echo number_format("2345322",4); //2,345,322.0000


//=>stripslashes(string) function
$str = 'he\'s my bro';
echo $str;  //he's my bro

$str = "he\'s my dad";
echo $str;  //he\'s my dad
echo stripslashes($str); //he's my dad


//=>basename(path) function
//=>basename(path,suffix) function
$path = "./assets/img/cover.jpg";
echo $path; //./assets/img/cover.jpg
echo basename($path);   //cover.jpg
echo basename($path,".jpg");   //cover


//******************************
//=>pathinfo(path) function
//=>pathinfo(path,flags) function

// PATHINFO_DIRNAME
// PATHINFO_BASENAME
// PATHINFO_FILENAME
// PATHINFO_EXTENSION

$filepath = "./assets/img/user/cover.jpg";
echo "<pre>".print_r(pathinfo($filepath),true)."</pre>";  

echo pathinfo($filepath)["dirname"];  //./assets/img/user
echo pathinfo($filepath)["filename"]; //cover

echo pathinfo($filepath,PATHINFO_DIRNAME); //./assets/img/user
echo pathinfo($filepath,PATHINFO_BASENAME); //cover.jpg
echo pathinfo($filepath,PATHINFO_EXTENSION); //jpg
echo pathinfo($filepath,PATHINFO_FILENAME); //cover


?>