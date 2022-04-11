<?php

namespace App\Http\RequestsV2;

use App\Http\Enums\URL;
use Httpful\Request;

trait BaseFetchRequest {

    protected function client(URL $baseUri, string $pathUri) {
        return Request::get($baseUri->value.$pathUri)->addHeaders([
            'Authorization' => "Bearer " . URL::AccessToken->value
        ])->send();
    }

    protected function getRequest(string $pathUri) {
        return $this->client(URL::ApiDomain, $pathUri);
    }
}