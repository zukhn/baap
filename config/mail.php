<?php

return [

    /*
    Supported: "smtp", "sendmail", "mailgun", "ses", "postmark", "log", "array"
    */

    'driver' => env('MAIL_DRIVER', 'smtp'),

    /*
    SMTP Host Address
    */

    'host' => env('MAIL_HOST', 'smtp.mailgun.org'),

    /*
    SMTP Host Port
    */

    'port' => env('MAIL_PORT', 587),
    'from' => [
        'address' => env('MAIL_FROM_ADDRESS', 'hello@example.com'),
        'name' => env('MAIL_FROM_NAME', 'Example'),
    ],

    /*
    Encryption Protocol
    */

    'encryption' => env('MAIL_ENCRYPTION', 'tls'),

    /*
    SMTP Server Username
    */

    'username' => env('MAIL_USERNAME'),

    'password' => env('MAIL_PASSWORD'),

    /*
    Sendmail System Path
    */

    'sendmail' => '/usr/sbin/sendmail -bs',
    'markdown' => [
        'theme' => 'default',

        'paths' => [
            resource_path('views/vendor/mail'),
        ],
    ],
    'log_channel' => env('MAIL_LOG_CHANNEL'),

];
