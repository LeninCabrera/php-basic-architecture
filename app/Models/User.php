<?php

namespace App\Models;

use App\Models\Contracts\Model;

class User implements Model {
    public array $fields;

    public function mapModel(array $user): User {
        $this->fields = $user;
        return $this;
    }

    public function mapModels(array $users): array {
        return array_map(
            function( $userItem ) { 
                $user = new User;
                $user->fields = $userItem;
                return $user;
            }, $users
        );
    }
}