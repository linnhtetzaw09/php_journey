<?php

class Customload{
    public static function loader($classname){
        echo "Loading the class = {$classname} <br/>";
        $file = str_replace("\\", "/", $classname) . ".php";

        echo $file . "<br/>";

        if(file_exists($file)){
            require_once(__DIR__."/".$file);
        }else{
            echo "No file exist";
        }
    }
}



?>