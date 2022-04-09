<?php

use Routes\Route;
use App\Controllers\UserController;
use App\Controllers\ModulesController;

Route::add('/users', function() {
    UserController::load('users-module');
});

Route::add('/modules', function() {
    ModulesController::load('modules-module');
});

Route::run('/');