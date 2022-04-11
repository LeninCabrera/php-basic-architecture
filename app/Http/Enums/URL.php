<?php

namespace App\Http\Enums;

enum URL: string {
    case ContentType    = 'application/json';
    case RedirectUri    = 'https://www.zoho.com';
    case AccountsUrl    = 'https://accounts.zoho.com';
    case ApiDomain      = 'https://www.zohoapis.com/crm/v2/';
    case AccessToken    = '1000.2564a569f743efa4a0d2f0b3328cc55a.54ce1b6805e70aef0ac7cba0ad204af4';
}