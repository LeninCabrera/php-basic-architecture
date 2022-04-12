<?php

namespace App\Http\Enums;

enum URL: string {
    case ContentType    = 'application/json';
    case RedirectUri    = 'https://www.zoho.com';
    case AccountsUrl    = 'https://accounts.zoho.com';
    case ApiDomain      = 'https://www.zohoapis.com/crm/v2/';
    case AccessToken    = '1000.05142c0ab2e7a0d86d1dd1be959e58aa.a871de47d255d006d24eeb9505fb0e8f';
}