<?php

namespace App\Http\Enums;

enum Host: string {
    case Users = 'users';
    case Modules = 'settings/modules';
}