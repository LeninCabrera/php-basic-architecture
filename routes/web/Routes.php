<?php

use Routes\Route;
use App\Controllers\HomeController;

Route::get('/', function() {
    HomeController::load('home-module');
});

Route::get('/users', function() {
    HomeController::load('home-module');
});