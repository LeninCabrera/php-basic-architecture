<?php

namespace App\Http\RequestsV3;

use App\Http\Enums\Host;

trait ProfileRequest {
    protected function response() {
        return $this->getRequest(Host::Profile->value)->toArray()['profiles'];
   }
}