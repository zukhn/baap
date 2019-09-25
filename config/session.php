<?php

return [

    /*
    Supported: "file", "cookie", "database", "apc", "memcached", "redis", "dynamodb", "array"
    */

    'driver' => env('SESSION_DRIVER', 'file'),
    'lifetime' => env('SESSION_LIFETIME', 120),
    'expire_on_close' => false,
    'encrypt' => true,

    /*
    File Location
    */

    'files' => storage_path('framework/sessions'),

    /*
    Database Connection
    */

    'connection' => env('SESSION_CONNECTION', null),
    'table' => 'sessions',

    /*
    Cache Store
    */

    'store' => env('SESSION_STORE', null),

    /*
    Sweeping Lottery
    */

    'lottery' => [2, 100],

    /*
    Cookie Name
    */

    'cookie' => env(
        'SESSION_COOKIE',
        '_baap'
    ),

    /*
    Cookie Path
    */

    'path' => '/',

    /*
    Cookie Domain
    */

    'domain' => env('SESSION_DOMAIN', null),

    /*
    HTTPS Only Cookies
    */

    'secure' => env('SESSION_SECURE_COOKIE', false),

    /*
    HTTP Access Only
    */

    'http_only' => true,

    /*
    Same-Site Cookies
    Supported: "lax", "strict"
    */

    'same_site' => null,

];
