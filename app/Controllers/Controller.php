<?php

namespace App\Controllers;

class Controller {
    public static function load($viewName, $urlParams = null){
        require_once('./resources/Views/'.$viewName.'.php');
    }
}