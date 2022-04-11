<?php

namespace App\Controllers;

use App\Models\Profile;
use App\Http\Requests\ProfileRequest;
use App\Http\Requests\BaseFetchRequest;

class ProfileController extends Controller {
    use BaseFetchRequest, ProfileRequest;

    public function __construct() {
        // echo '<pre>' , var_dump($this->getAllProfiles()) , '</pre>';
    }

    public function getAllProfiles(): array {
        return (new Profile)->mapModels($this->response());
    }
}