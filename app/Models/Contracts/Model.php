<?php

namespace App\Models\Contracts;

define('MAP_MODEL_FUNCTION', 'mapModel');

interface Model {
    public function mapModel(array $profile): object;
    public function mapModels(array $objects): array;
}