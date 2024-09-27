<?php

$fullname = 'lin htet';
$job = 'developer';

echo $fullname;
echo $job;

echo "$fullname";   //lin htet
echo '$job';      //cannot use in php

echo "My name is $fullname";  //My name is lin htet

echo 'My name is $fullname';  //d tine pyan ya ml
echo "My name is ${fullname}";  //ya tl
echo "My name is {$fullname}";  //ya tl

echo `My name is ${fullname}`;  //error d tine pyan ya ml
echo `My name is {$fullname}`;  //error d tine pyan ya ml


echo "He is my father he is a $job";
echo "He is my father he is a \$job";
echo 'He is my father he is a $job'; //d tine
echo "he is my father he is \$job";
echo "he is my father he is \{$job}";
echo "he is my father he is {\$job}";

//difference between echo and print
// $gender = echo "male";  //error
$nation = print "uk";  //uk


//concat (.)
$firstname = "lin ";
$lastname = "htet";

echo $firstname.$lastname;
// echo $firstname.' '.$lastname;

//comments
#single line comment

/* multiline comment
comment 1
comment 2
comment 3 */



?>