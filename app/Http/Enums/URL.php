<?php

namespace App\Http\Enums;

enum URL: string {
    case ContentType    = 'application/json';
    case RedirectUri    = 'https://www.zoho.com';
    case AccountsUrl    = 'https://accounts.zoho.com';
    case ApiDomain      = 'https://www.zohoapis.com/crm/v2/';
    case AccessToken    = '1000.1e5ad4f6daf03746f29fe2f9ccf953fc.8e6d10b97fc015086d247a8f9bdaca00';
}