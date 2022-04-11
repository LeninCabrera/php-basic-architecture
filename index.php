<?php

// Autoload files using the Composer autoloader.
require_once __DIR__ . '/vendor/autoload.php';

// Autoload files app
require_once __DIR__ . '/bootstrap/app.php';

// Require routes file
require_once __DIR__ . '/routes/Route.php';
require_once __DIR__ . '/routes/web/routes.php';
