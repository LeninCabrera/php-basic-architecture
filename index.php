<?php

// Autoload files using the Composer autoloader.
require_once __DIR__ . '/vendor/autoload.php';

function loadClasses($class_name) {
    $controllersPath = __DIR__ . '/app/controllers/'.$class_name.'.php';

    if(file_exists($controllersPath)) {
        require_once($controllersPath);
    }    
}

spl_autoload_register('loadClasses');

require_once __DIR__ . '/routes/web/routes.php';
