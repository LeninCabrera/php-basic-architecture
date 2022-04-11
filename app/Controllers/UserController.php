<?php

namespace App\Controllers;

use App\Models\User;
use App\Http\Requests\UserRequest;
use App\Http\Requests\BaseFetchRequest;

class UserController extends Controller {
    use BaseFetchRequest, UserRequest;

    public function __construct() {
        echo '<pre>' , var_dump($this->getAllUsers()) , '</pre>';
    }

    public function getAllUsers(): array {
        return (new User)->mapModels($this->response());
    }
}