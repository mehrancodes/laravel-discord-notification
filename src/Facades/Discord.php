<?php

namespace MehranCodes\Notifier\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method channel($channel = null)
 * @method body(string $content)
 * @method embeds(array $embeds)
 * @method send()
 *
 * @see MehranCodes\Discord\Discord
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
