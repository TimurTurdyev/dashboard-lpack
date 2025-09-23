<?php

return [
    'crm_server' => env('CRM_SERVER'),
    'crm_login' => env('CRM_LOGIN'),
    'crm_password' => env('CRM_PASSWORD'),

    'commit_hash' => env('COMMIT_HASH', date('y-m-d')),
];
