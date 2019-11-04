<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, SparkPost and others. This file provides a sane default
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'github' => [
        'client_id' => env('17a35af0e86adec68b9c'),
        'client_secret' => env('135e351c3f8cdbedfaf069c237dfcba681d12872'),
        'redirect' => 'http://127.0.0.1:8000/github/redirect',
    ],

    'facebook' => [
        'client_id' => env('432472080742740'),
        'client_secret' => env('5ab9453347850f3b8d252f360282b47a'),
        'redirect' => 'https://127.0.0.1:8000/login/callback',
    ],

    'google' => [
        'client_id' => env('GOOGLE_CLIENT_ID'),
        'client_secret' => env('GOOGLE_CLIENT_SECRET'),
        'redirect' => 'http://your-callback-url',
    ],

    'linkedin' => [
        'client_id' => env('LINKEDIN_CLIENT_ID'),
        'client_secret' => env('LINKEDIN_CLIENT_SECRET'),
        'redirect' => 'http://your-callback-url',
    ],

    'instagram' => [
        'client_id' => env('INSTAGRAM_CLIENT_ID'),
        'client_secret' => env('INSTAGRAM_CLIENT_SECRET'),
        'redirect' => 'http://your-callback-url',
    ],

];
