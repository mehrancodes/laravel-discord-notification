<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Channel Name
    |--------------------------------------------------------------------------
    |
    | Here you may specify the default channel name that should be used
    | by the package.
    |
    */

    'default' => env('DISCORD_NOTIFIER_CHANNEL', 'capitan_hook'),

    /*
    |--------------------------------------------------------------------------
    | Channels Webhooks
    |--------------------------------------------------------------------------
    |
    | Here you may configure as many channels webhooks as you wish.
    | Every channel must contain a name and a webhook, which you can get them
    | from the Discord.
    |
    */

    'channels' => [
        'capitan_hook' => [
            'webhook' => null,
        ],
        // You can add as many Discord channels as you like to this array...
    ],
];
