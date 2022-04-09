<?php

namespace App\Http\Requests;

use GuzzleHttp\Client;
use App\Http\Enums\URL;
use Psr\Http\Message\ResponseInterface;

trait BaseFetchRequest {

    protected function client(URL $baseUri = URL::ApiDomain): Client {
        return new Client(['base_uri' => $baseUri->value]);
    }

    protected function getRequest(string $pathUri): ResponseInterface {
        return $this->client()->request('GET', $pathUri, 
            ['headers' => 
                [
                    'Authorization' => "Bearer " . URL::AccessToken->value
                ]
            ]);
    }
}