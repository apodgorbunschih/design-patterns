<?php

namespace App\Adapter\Problem\Plug;

use App\Adapter\Problem\Socket\Socket;

abstract class Plug
{
    abstract public function pins();

    public function insertInto(Socket $socket)
    {
        if($socket->pins() !== $this->pins()) {
            throw new \RuntimeException("Different number of pins");
        }

        return true;
    }
}