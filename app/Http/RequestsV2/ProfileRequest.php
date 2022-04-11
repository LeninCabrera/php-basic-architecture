<?php

namespace App\Http\RequestsV2;

use App\Http\Enums\Host;
use Httpful\Request;

trait ProfileRequest {
    protected function response() {
        return json_decode($this->getRequest(Host::Profile->value), true)['profiles'];
   }
}