<?php

use Routes\Route;
use App\Controllers\HomeController;
use App\Controllers\UserController;

Route::add('/', function() {
    HomeController::load('home-module');
});

Route::add('/users', function() {
    UserController::load('users-module');
});

Route::run('/');