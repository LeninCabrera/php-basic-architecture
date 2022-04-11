<?php

namespace App\Http\Requests;

use App\Http\Enums\Host;

trait UserRequest {
    protected function response() {
        return json_decode($this->getRequest(Host::Users->value)->getBody(), true)['users'];
   }
}