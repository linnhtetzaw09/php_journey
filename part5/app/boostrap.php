<?php

// config
require_once "config/config.php";

// Load Helpers
require_once 'helpers/sessionconfig.php';
require_once 'helpers/flasmessage.php';
require_once 'helpers/redirect.php';
require_once 'helpers/textfilter.php';


// Libraries (autoload)
spl_autoload_register(function ($classname) {
    require_once __DIR__ . "/libraries/" . $classname . ".php";
});


?>