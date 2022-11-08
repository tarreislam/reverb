<?php

namespace Reverb\Channels;

use Illuminate\Support\Str;

class ChannelBroker
{
    /**
     * Return the relevant channel instance.
     *
     * @param  string  $name
     * @return \Reverb\Channels\Channel
     */
    public static function create(string $name): Channel
    {
        return match (Str::before($name, '-')) {
            'private' => new PrivateChannel($name),
            'presence' => new PresenceChannel($name),
            default => new Channel($name),
        };
    }
}