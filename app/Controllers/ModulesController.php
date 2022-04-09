<?php

namespace App\Controllers;

use App\Http\Requests\ModulesRequest;
use App\Http\Requests\BaseFetchRequest;

class ModulesController extends Controller {
    use BaseFetchRequest, ModulesRequest;

    public static function load($viewName, $urlParams = null, $instance = new self) {
        foreach ($instance->response()['modules'] as $user) {
            echo '<br>';
            echo $user["plural_label"];
        }
        parent::load($viewName);
    }
}