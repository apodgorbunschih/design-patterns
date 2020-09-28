<?php

namespace App\Adapter\Solution\bad;

use App\Adapter\Solution\bad\Socket\Socket;

class Laptop
{
    /**
     * @var Cable
     */
    private Cable $cable;

    private bool $isOn = false;
    private bool $plugIsInSocket;
    private int $voltage;
    /**
     * @var Socket
     */
    private Socket $connectedSocket;
    private int $currentVoltage;

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
            throw new \RuntimeException("Too much voltage. Laptop can be damaged");
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

    private function startElectricalTransfer()
    {
    }
}