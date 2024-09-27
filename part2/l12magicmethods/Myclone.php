<?php


class Myclone{

    public function project($name){
        echo "I created a new ${name} project <br/>";
    }

    public function task(){
        echo "I am new task <br/>";
    }

    public function __call($name, $arguments)
    {
        echo "You not yet define these \"${name}\" nonstatic method . so your value are = "."<pre>".print_r($arguments,true)."</pre>";
    }

    public static function exam(){
        echo "i am new exam <br/>";
    }

    public static function __callstatic($name, $arguments)
    {
        echo "You not yet define these \"${name}\" static method . so your value are = "."<pre>".print_r($arguments,true)."</pre>";
    }

}

echo "This is Myclone  <br/>";

$obj1 = new Myclone();
$obj1->project('Hinet');            //I created a new Hinet project
$obj1->project('bookshop');         //I created a new bookshop project

$obj2 = $obj1;      //copy by reference
$obj1->project('Coffee');           //I created a new Coffee project

$obj3 = clone $obj1;    //cloning
$obj1->project('E-wallet');         //I created a new E-wallet project

echo "<hr/>";

if(method_exists('Myclone','task')){
    $obj1->task();
}else{
    echo "No method exitst";
}

if(method_exists($obj1,'task')){
    $obj1->task();
}else{
    echo "No method exitst";
}

if(method_exists(new Myclone,'task')){
    $obj1->task();
}else{
    echo "No method exitst";
}

if(method_exists(new Myclone,'exam')){
    $obj1::exam();
}else{
    echo "No method exitst";
}

if(method_exists($obj3,'exam')){
    $obj3::exam();
}else{
    echo "No method exitst";
}

if(method_exists($obj2,'exam')){
    $obj2::exam();
}else{
    echo "No method exitst";
}




?>