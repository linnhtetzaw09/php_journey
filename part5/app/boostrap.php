<?php

// config
require_once "config/config.php";

// Load Helpers
require_once 'helpers/sessionconfig.php';
require_once 'helpers/flasmessage.php';
require_once 'helpers/redirect.php';
require_once 'helpers/textfilter.php';


spl_autoload_register(function ($classname) {
    // Use DIRECTORY_SEPARATOR for cross-platform compatibility
    require_once __DIR__ . DIRECTORY_SEPARATOR . 'libraries' . DIRECTORY_SEPARATOR . $classname . '.php';
});


?>