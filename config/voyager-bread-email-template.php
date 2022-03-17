<?php

return [

    /*
     * If enabled for voyager-bread-email-template package.
     */
    'enabled' => env('VOYAGER_BREAD_EMAIL_TEMPLATE_ENABLED', true),

    /*
     * The config_key for voyager-bread-email-template package.
     */
    'config_key' => env('VOYAGER_BREAD_EMAIL_TEMPLATE_CONFIG_KEY', 'joy-voyager-bread-email-template'),

    /*
     * The route_prefix for voyager-bread-email-template package.
     */
    'route_prefix' => env('VOYAGER_BREAD_EMAIL_TEMPLATE_ROUTE_PREFIX', 'joy-voyager-bread-email-template'),

    /*
    |--------------------------------------------------------------------------
    | Controllers config
    |--------------------------------------------------------------------------
    |
    | Here you can specify voyager controller settings
    |
    */

    'controllers' => [
        'namespace' => 'Joy\\VoyagerBreadEmailTemplate\\Http\\Controllers',
    ],
];
