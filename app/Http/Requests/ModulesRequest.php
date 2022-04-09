<?php

namespace App\Http\Requests;

use App\Http\Enums\Host;

trait ModulesRequest {
    protected function response() {
        return json_decode($this->getRequest(Host::Modules->value)->getBody(), true);
    }
}