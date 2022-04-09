<?php

namespace App\Http\Enums;

enum URL: string {
    case ContentType    = 'application/json';
    case RedirectUri    = 'https://www.zoho.com';
    case AccountsUrl    = 'https://accounts.zoho.com';
    case ApiDomain      = 'https://www.zohoapis.com/crm/v2/';
    case AccessToken    = '1000.888092e86a804cb0faafda937c051f7c.95927b0eb2c30403b6aaf512870f2bcb';
}