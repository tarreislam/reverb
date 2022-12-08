<?php

namespace Laravel\Reverb\Tests;

use Laravel\Reverb\Concerns\SerializesConnections;
use Laravel\Reverb\Contracts\SerializableConnection as ContractsSerializableConnection;
use Laravel\Reverb\Tests\Connection as BaseConnection;

class SerializableConnection extends BaseConnection implements ContractsSerializableConnection
{
    use SerializesConnections;
}