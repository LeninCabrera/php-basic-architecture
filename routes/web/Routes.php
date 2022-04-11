<?php

use Routes\Route;
use App\Controllers\UserController;
use App\Controllers\ProfileController;
use App\Controllers\ModulesController;

Route::add('/users',    function() { new UserController(); });
Route::add('/profile',  function() { new ProfileController(); });
Route::add('/modules',  function() { new ModulesController(); });

Route::run('/');