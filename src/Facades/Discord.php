<?php

namespace Jackwestin\Notifier\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method channel($channel = null)
 * @method message(string $message)
 * @method embeds(array $embeds)
 * @method send()
 *
 * @see Jackwestin\Discord\Discord
 */
class Discord extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'laravel-discord-notifier';
    }
}
