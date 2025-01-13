<?php

// config
require_once "config/config.php";

// libraries (manual)
// require_once "libraries/SystemController.php";
// require_once "libraries/SystemCore.php";
// require_once "libraries/SystemDatabase.php";

// Libraries (autoload)
spl_autoload_register(function($classname){
    require_once "libraries/" . $classname.".php";
});


?>