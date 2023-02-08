<?php

namespace React\Tests\Http;

use Evenement\EventEmitter;
use React\Socket\ConnectionInterface;
use React\Stream\WritableStreamInterface;

class SocketConnectionStub extends EventEmitter implements ConnectionInterface
{
    public function write($data)
    {
        // NO-OP
    }

    public function end($data = null)
    {
        // NO-OP
    }

    public function close()
    {
        // NO-OP
    }

    public function pause()
    {
        // NO-OP
    }

    public function resume()
    {
        // NO-OP
    }

    public function pipe(WritableStreamInterface $dest, array $options = [])
    {
        // NO-OP
    }

    public function isWritable()
    {
        return true;
    }

    public function isReadable()
    {
        return true;
    }

    public function getRemoteAddress()
    {
        return null;
    }

    public function getLocalAddress()
    {
        return null;
    }
}
