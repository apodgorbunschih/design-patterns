<?php

namespace App\Adapter\Solution\good\Plug;

use App\Adapter\Solution\good\Socket\Socket;

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