<?php

namespace App\Http\Requests;

use App\Http\Enums\Host;

trait ProfileRequest {
    protected function response() {
        return json_decode($this->getRequest(Host::Profile->value)->getBody(), true)['profiles'];
   }
}