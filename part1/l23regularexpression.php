<?php

$string = "We are family";

// preg_match(pattern,string);

echo $string;
$result = preg_match("We are family",$string);       //error
$result = preg_match("/We are family/",$string);     //1 true
$result = preg_match("/ family/",$string);          //1 true

$result = preg_match("/mily$/",$string);         //true
$result = preg_match("/family$/",$string);       //1 true
$result = preg_match("/^Family$/",$string);         //false  //family bl phit ya ml words ka 
$result = preg_match("/are$/",$string);         //false  
$result = preg_match("/we$/",$string);         //false   


$result = preg_match("/^milys/",$string);       //false
$result = preg_match("%^are%",$string);       //false
$result = preg_match("#^we#",$string);       //false
$result = preg_match("!^We!",$string);       //true


$result = preg_match("/^we/",$string);       //false
$result = preg_match("/^we/i",$string);       //true
$result = preg_match("/^We/i",$string);       //true


$result = preg_match("/[b-d]/",$string);       //false
$result = preg_match("/[a-f]/",$string);       //true
$result = preg_match("/[a-z]/",$string);       //true
$result = preg_match("/[A-Z]/",$string);       //true
$result = preg_match("/[0-4]/",$string);       //false


$string = "my lucky number is 13";
$result = preg_match("/[0-4]/",$string);               //true
$result = preg_match("/[A-Z]/",$string);               //false
$result = preg_match("/[A-Z] | [a-z]/",$string);       //true
$result = preg_match("/[A-Z,a-z]/",$string);            //true
$result = preg_match("/^[a-z]/",$string);               //true
$result = preg_match("/^[A-Z]/",$string);               //false
$result = preg_match("/^[3-7]/",$string);               //false
$result = preg_match("/[a-z]$/",$string);               //false
$result = preg_match("/[0-4]$/",$string);               //true



$result = preg_match("/[^a-z]/",$string);               //true it mean string include other characters expect a-z
$result = preg_match("/[^0-5]/",$string);               //true  it mean string include other characters except 0-5



$string = "linhtetn@gmail.com";

$result = preg_match("/@/",$string);             //true
$result = preg_match("/m/",$string);             //true
$result = preg_match("/m+/",$string);             //true
$result = preg_match("/b+/",$string);             //false

$result = preg_match("/b*/",$string);             //true
$result = preg_match("/b?/",$string);             //true


$result = preg_match("/n{1}/",$string);             //true
$result = preg_match("/n{2}/",$string);             //false


$string = "linnhtet@gmail.com";

$result = preg_match("/n{1}/",$string);             //true
$result = preg_match("/n{2}/",$string);             //true

$result = preg_match("/n{3}/",$string);             //false

$result = preg_match("/n{1,3}/",$string);             //true
$result = preg_match("/n{2,3}/",$string);             //true

$result = preg_match("/\s/",$string);                 //false


$string = "V8 Engine";

$result = preg_match("/\s/",$string);                 //true
$result = preg_match("/\d/",$string);                 //true
$result = preg_match("/\D/",$string);                 //true
$result = preg_match("/\w/",$string);                 //true
$result = preg_match("/\W/",$string);                 //true


$string = "528";

$result = preg_match("/\s/",$string);                 //false
$result = preg_match("/\d/",$string);                 //true
$result = preg_match("/\D/",$string);                 //false
$result = preg_match("/\w/",$string);                 //true
$result = preg_match("/\W/",$string);                 //false


$string = "admin@gmail.com";

$result = preg_match("/a/",$string);                 //true
$result = preg_match("/am/",$string);                //false
$result = preg_match("/a\wm/",$string);              //true
$result = preg_match("/a\w{1}m/",$string);            //true
$result = preg_match("/a\w{2}m/",$string);            //false  , cuz any exact 2 words      //addmin....
$result = preg_match("/a\w{2,4}m/",$string);            //false , cuz any exacr 2-4 words       //addddmin........
$result = preg_match("/a\w{2,}m/",$string);            //false , cuz any exact 2 to  more words         //addddddddmin....


$result = preg_match("/a.m/",$string);            //true
$result = preg_match("/a..m/",$string);           //false
$result = preg_match("/a...m/",$string);          //false

$result = preg_match("/a.{1}m/",$string);            //true
$result = preg_match("/a.{2}m/",$string);            //false
$result = preg_match("/a.{2,4}m/",$string);          //false  //adbcdmin....
$result = preg_match("/a.{2,}m/",$string);           //false  //adbcngeisjh285dmin....



$string = "PHP";
$result = preg_match("/.{2}/",$string);         //true

$string = "php";
$result = preg_match("/hp/",$string);         //true
$result = preg_match("/p(hp)*/",$string);     //true
$result = preg_match("/p(bh)*/",$string);     //true

$result = preg_match("/p(hp)+/",$string);     //true
$result = preg_match("/p(ph)+/",$string);     //false
$result = preg_match("/p(p)+/",$string);     //false


$string = "Vv";
$result = preg_match("/.{2}/",$string);         //true
$result = preg_match("/^.{2}$/",$string);        //true  word 2 lone phit ya ml any characters ya tl


$string = "Welcome to our <i>programming class</i>";
$result = preg_match("/<i></i>/",$string);        //false
$result = preg_match("/<i>\w<\/i>/",$string);      //false cuz it contain space
$result = preg_match("/<i>\w*<\/i>/",$string);      //false cuz it contain space
$result = preg_match("/<i>.<\/i>/",$string);         //false cuz it have one space
$result = preg_match("/<i>.*<\/i>/",$string);        //true
$result = preg_match("/<i>(.*)<\/i>/",$string);       //true


$string = "admin@gmail.com";
$result = preg_match("/^[a-z,A-Z]+@[a-z]+\.\w{3}/",$string);       //true


// preg_replace(pattern,replace,string);

$string = "Are you ready to learn PHP Framework";
$result = preg_replace('/php/','javascript',$string);  //no action
$result = preg_replace('/php/i','javascript',$string);  //Are you ready to learn javascript Framework
$result = preg_replace('/\s/','javascript',$string);  //ArejavascriptyoujavascriptreadyjavascripttojavascriptlearnjavascriptPHPjavascriptFramework


//Bracket expressions 

$string = "admin1234@gmail .com";
$result = preg_replace('/[[:space:]]/',"",$string);  //admin123@gmail.com
$result = preg_replace('/[[:space:]]/',"x",$string);  //admin123@gmailx.com
$result = preg_replace('/[[:alpha:]]/',"x",$string);  //xxxxx123@xxxxx .xxx
$result = preg_replace('/[[:digit:]]/',"x",$string);  //adminxxx@gmail .com
$result = preg_replace('/[[:alnum:]]/',"x",$string);  //xxxxxxxx@xxxxx .xxx
$result = preg_replace('/[[:punct:]]/',"x",$string);  //admin123xgmail .com

$string = "Admin123@gmail. Com";
$result = preg_replace('/[[:lower:]]/',"x",$string);  //Axxxx123@xxxx .Cxx
$result = preg_replace('/[[:upper:]]/',"x",$string);  //xdmin123xgmail .xom

$string = "Are you ready to learn PHP Framework";
$result = preg_replace(['/PHP/','/framework/'],['Javascript','libraries'],$string);  //Are you ready to learn Javascript Framework
$result = preg_replace(['/PHP/','/framework/i'],['Javascript','libraries'],$string);  //Are you ready to learn Javascript libraries


$string = "My lucky number is 007 but i got tickets number is 5700";

$result = preg_replace("/[0-9]/",'x',$string);  //My lucky number is xxx but i got tickets number is xxxx
$result = preg_replace("/[0-9]+/",'x',$string);  //My lucky number is x but i got tickets number is x

echo $result;



                            // no limit = 0 or null
//preg_split(pattern,string,limit,flags)

$string = "My lucky number is 13";
$result = preg_split("/\s/",$string);
// echo $result; //error array to string conversion


echo "<pre>".print_r($result,true)."</pre>";
echo $result[0];  //My
echo $result[4];  //13


$result = preg_split("/\s/",$string,2);
echo "<pre>".print_r($result,true)."</pre>";  //arry 2 ku ya
echo $result[0];  //My
echo $result[1];  //lucky number is 13


$string = "My lucky number is 007 but i got tickets number is 5700";
$result = preg_split("/\s/",$string);
$result = preg_split("/[\s]/",$string);
$result = preg_split("/\s,/",$string);  ///[0]=> my lucky number is 007 but i got tickets numbers 5700
$result = preg_split("/\s,/",$string);

// $result = preg_split("/[\s,],/",$string,NULL,PREG_SPLIT_NO_EMPTY);
$result = preg_split("/[\s,]/",$string,0,PREG_SPLIT_NO_EMPTY);
$result = preg_split("//",$string);
// $result = preg_split("//",$string,NULL,PREG_SPLIT_NO_EMPTY);
$result = preg_split("//",$string,0,PREG_SPLIT_NO_EMPTY);


echo "<pre>".print_r($result,true)."</pre>";  


//preg_quote(string,delimiter)

$string = "He\'s my father , do u know him?";
$result = preg_quote($string);  //He\'s my father , do u know him \?
$result = preg_quote($string,"o");  //He\'s my father , d\o u kn\ow him \?

echo $result;


//preg_match_all(pattern,string,match/return,flags);

$string = "Winning num are 27-000 and 002-777, but my ticket nuum is 007-222";

preg_match_all("/\d+-\d+/",$string,$result,PREG_SET_ORDER);
preg_match_all("/\d+-\d+/",$string,$result,PREG_PATTERN_ORDER);
// echo $result;       //error array to string conversion

echo "<pre>".print_r($result,true)."</pre>";  


//Lookahead & Lookbehind
// (?=)positive lookahead or Regex lookahead   = right hand side
// (?<=)positive lookbehind or Regex lookbehind   = left hand side

// (?!)negative lookahead or Regex lookahead
// (?<!)negative lookbehind or Regex lookbehind

$string = "linhtet@gmail.com";

$result = preg_match('/@(?=gmail)/',$string);   //true   positive lookhead
$result = preg_match('/(?<=@)gmail/',$string);   //true  positive lookbehind

$result = preg_match('/@(?!gmail)/',$string);   //false  negative lookhead
$result = preg_match('/(?<!@)gmail/',$string);   //false  negative lookbehind

echo $result;


?>





<!-- 
    
    $ must be in end (case sensitive)
    ^caret or circumflex, shift+6 , must be start (case sensitive)
    i no case sensitive
    [] range a-z A-Z 0-5 0-9 
    m+ must contain at least one m and more 
    m* can contain b or not and more
    m? can contain b or not and more
    m{nth} containn (same or couple ) place m as per nth and more
    m{nth,nth} containn place m as per nth and more
    m{nth,} containn place m as per nth and more

    \s space
    \d digit
    \D no digit
    \w any wrote[a-z] [A-Z] space no
    \W any word !@#%^&* including space
    . any characters
    () this 
    + must

    p(hp) * can be contain hp or not and more
    p(hp)+ must be contain hp

    [[:space:]]  space
    [[:alpha:]]  alphatetic
    [[:digit:]]  digit
    [[:alnum:]]  alphanumeric
    [[:punct:]]  puncturation
    [[:lower:]]  lowercase
    [[:upper:]]  uppercase


-->
