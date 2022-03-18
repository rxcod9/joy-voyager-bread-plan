<?php

return [

    /*
     * If enabled for voyager-bread-plan package.
     */
    'enabled' => env('VOYAGER_BREAD_PLAN_ENABLED', true),

    /*
     * The config_key for voyager-bread-plan package.
     */
    'config_key' => env('VOYAGER_BREAD_PLAN_CONFIG_KEY', 'joy-voyager-bread-plan'),

    /*
     * The route_prefix for voyager-bread-plan package.
     */
    'route_prefix' => env('VOYAGER_BREAD_PLAN_ROUTE_PREFIX', 'joy-voyager-bread-plan'),

    /*
    |--------------------------------------------------------------------------
    | Controllers config
    |--------------------------------------------------------------------------
    |
    | Here you can specify voyager controller settings
    |
    */

    'controllers' => [
        'namespace' => 'Joy\\VoyagerBreadPlan\\Http\\Controllers',
    ],
];
