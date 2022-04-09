<?php

namespace App\Controllers;

use App\Http\Requests\UserRequest;
use App\Http\Requests\BaseFetchRequest;

class UserController extends Controller {
    use BaseFetchRequest, UserRequest;

    public static function load($viewName, $urlParams = null, $instance = new self) {
        foreach ($instance->response()['users'] as $user) {
            echo '<br>';
            echo $user['email'];
        }
        parent::load($viewName);
    }
}