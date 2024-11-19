<?php

session_start();

function setSession($key,$val){
    $_SESSION[$key] = $val;
}

function getSession($key){
    return $_SESSION[$key];
}

function verifySession($key){
    return isset($_SESSION[$key]);
}

function unsetSession($key){
    unset($_SESSION[$key]);
}

function destroySession(){
    session_destroy();
}

function authFailed(){
    if(isset($_SESSION['email']) && !isset($_SESSION['password'])){
        return true;
    }
}

function redirectTo($url){
    header("Location:$url");
}

function formatPrint(Array $array){
    echo "<pre>".print_r($array,true)."</pre>";
}


?>