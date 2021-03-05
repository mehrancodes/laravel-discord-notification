<?php

namespace MehranCodes\Notifier;

use Illuminate\Contracts\Filesystem\Filesystem;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Support\Facades\Http;
use InvalidArgumentException;

class Discord
{
    private $webhook;

    private $content;

    private $embeds;

    /**
     * The application instance.
     *
     * @var Application
     */
    protected $app;

    /**
     * Create a new discord laravel-discord-notifier instance.
     *
     * @param  Application  $app
     * @return void
     */
    public function __construct($app)
    {
        $this->app = $app;

        $this->channel();
    }

    public function channel($channel = null)
    {
        $channel = $channel ?: $this->getDefaultChannel();

        $this->webhook = $this->get($channel);

        return $this;
    }

    public function body(string $content)
    {
        $this->content = $content;

        return $this;
    }

    public function embeds(array $embeds)
    {
        $this->embeds = $embeds;

        return $this;
    }

    public function send()
    {
        throw_if(
            empty($this->webhook),
            new InvalidArgumentException('You have to define webhook.')
        );

        throw_if(
            empty($this->content),
            new InvalidArgumentException('You have to define content.')
        );

        Http::post($this->webhook, [
            'content' => $this->content,
            'embeds' => [$this->embeds],
        ]);
    }

    /**
     * Attempt to get the channel webhook from the config file.
     *
     * @param  string  $name
     * @return Filesystem
     */
    protected function get($name)
    {
        return $this->resolve($name);
    }

    /**
     * Resolve the given channel.
     *
     * @param  string  $name
     * @return Filesystem
     *
     * @throws InvalidArgumentException
     */
    protected function resolve($name)
    {
        $config = $this->getConfig($name);

        if (empty($config['webhook'])) {
            throw new InvalidArgumentException("Channel [{$name}] does not have a configured webhook.");
        }

        return $config['webhook'];
    }

    /**
     * Get the laravel-discord-notifier configuration.
     *
     * @param  string  $name
     * @return array
     */
    protected function getConfig($name)
    {
        return $this->app['config']["discord-notifier.channels.{$name}"] ?: [];
    }

    /**
     * Get the default channel name.
     *
     * @return string
     */
    public function getDefaultChannel()
    {
        return $this->app['config']['discord-notifier.default'];
    }
}
