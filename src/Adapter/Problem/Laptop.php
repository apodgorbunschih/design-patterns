<?php

namespace App\Adapter\Problem;

use App\Adapter\Problem\Socket\Socket;

class Laptop
{
    private Cable $cable;
    private bool $isOn = false;
    private bool $plugIsInSocket;
    private Socket $connectedSocket;

    public function __construct(Cable $cable)
    {
        $this->cable = $cable;
    }

    public function connectToSocket(Socket $socket)
    {
        $this->plugIsInSocket = $this->cable->plug()->insertInto($socket);
        $this->connectedSocket = $socket;
    }

    public function powerOn()
    {
        if (!$this->plugIsInSocket) {
            throw new \RuntimeException();
        }

        if ($this->connectedSocket->voltage() > $this->cable->voltage()) {
            throw new \RuntimeException("Too much voltage. Laptop burned");
        }

        if ($this->connectedSocket->voltage() < $this->cable->voltage()) {
            throw new \RuntimeException("Too much voltage. Cant start laptop");
        }

        $this->isOn = true;
    }

    public function isOn(): bool
    {
        return $this->isOn;
    }

    public function isOff(): bool
    {
        return !$this->isOn;
    }
}