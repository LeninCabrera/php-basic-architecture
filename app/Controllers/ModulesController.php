<?php

namespace App\Controllers;

use App\Http\Requests\ModulesRequest;
use App\Http\Requests\BaseFetchRequest;

class ModulesController extends Controller {
    use BaseFetchRequest, ModulesRequest;
}