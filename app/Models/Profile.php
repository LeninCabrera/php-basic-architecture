<?php

namespace App\Models;

use App\Models\Contracts\Model;

class Profile implements Model {
    public array $fields;

    public function mapModel(array $profile): Profile {
        $this->fields = $profile;
        return $this;
    }

    public function mapModels(array $profiles): array {
        return array_map(
            function( $profileItem ) { 
                $profile = new Profile;
                $profile->fields = $profileItem;
                return $profile;
            }, $profiles
        );
    }
}