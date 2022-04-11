<?php

namespace App\Http\Enums;

enum Host: string {
    case Users      = 'users';
    case Modules    = 'settings/modules';
    case Profile    = 'settings/profiles';
}