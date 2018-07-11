<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Echo server host.
    |--------------------------------------------------------------------------
    |
    | Host of laravel echo server.
    |
    */

    'host' => env('API_ECHO_HOST', preg_replace('/https?\:\/\//i', '', env('API_URL'))),

    /*
    |--------------------------------------------------------------------------
    | Echo server port.
    |--------------------------------------------------------------------------
    |
    | Port for laravel echo server.
    |
    */

    'port' => env('API_ECHO_PORT', 8443),

    /*
    |--------------------------------------------------------------------------
    | Echo server transports.
    |--------------------------------------------------------------------------
    |
    | List of transports to be used by socket.io.
    | Supported transports: websocket, polling
    |
    */

    'transports' => ['websocket'],

    /*
    |--------------------------------------------------------------------------
    | Echo reconnection.
    |--------------------------------------------------------------------------
    |
    | Echo client can try to reconnect when connection failure occurs.
    | If this parameter is set to false, client would reconnect
    | and give up.
    |
    */

    'reconnect' => true,

    /*
    |--------------------------------------------------------------------------
    | Echo reconnection delay.
    |--------------------------------------------------------------------------
    |
    | How many seconds should echo client wait before attempting
    | reconnection.
    |
    */

    'reconnect-delay' => 60,

    /*
    |--------------------------------------------------------------------------
    | Echo reconnection attempts.
    |--------------------------------------------------------------------------
    |
    | How many reconnection attempts should echo client make.
    |
    */

    'reconnect-attempts' => 5,

];
