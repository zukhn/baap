<?php

return [

    /*
    Supported: "bcrypt", "argon", "argon2id"
    */

    'driver' => 'bcrypt',

    'bcrypt' => [
        'rounds' => env('BCRYPT_ROUNDS', 10),
    ],

    'argon' => [
        'memory' => 8192,
        'threads' => 2,
        'time' => 2,
    ],

];
