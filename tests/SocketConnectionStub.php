<?php

namespace React\Tests\Http;

use Evenement\EventEmitter;
use React\Socket\ConnectionInterface;
use React\Stream\WritableStreamInterface;

class SocketConnectionStub extends EventEmitter implements ConnectionInterface
{
    /**
     * @var string
     * @readonly
     */
    public $writeBuffer = '';

    public function write($data)
    {
        $this->writeBuffer .= $data;
        return true;
    }

    public function end($data = null)
    {
        $this->writeBuffer .= $data;
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
