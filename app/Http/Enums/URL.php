<?php

namespace App\Http\Enums;

enum URL: string {
    case ContentType    = 'application/json';
    case RedirectUri    = 'https://www.zoho.com';
    case AccountsUrl    = 'https://accounts.zoho.com';
    case ApiDomain      = 'https://www.zohoapis.com/crm/v2/';
    case AccessToken    = '1000.85200a318f4e5094edf6c03f37ace30b.5aef580efc57148242db77a709bad6d0';
}