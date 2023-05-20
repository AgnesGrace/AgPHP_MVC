<?php
//load the config file
require_once 'config/config.php';
// load our libraries
// require_once 'libraries/Core.php';
// require_once 'libraries/Controller.php';
// require_once 'libraries/Database.php';

// An autoloader to require all the libraries
spl_autoload_register(function($className){
 require_once 'libraries/' . $className. '.php';
});