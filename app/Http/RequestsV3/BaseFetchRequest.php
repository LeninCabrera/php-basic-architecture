<?php

namespace App\Http\RequestsV3;

use App\Http\Enums\URL;
use Symfony\Component\HttpClient\HttpClient;

trait BaseFetchRequest {

    protected function client() {
        return HttpClient::create(['auth_bearer' =>  URL::AccessToken->value,]);
    }

    protected function getRequest(string $pathUri) {
        return $this->client()->request('GET', URL::ApiDomain->value . $pathUri);
    }
}