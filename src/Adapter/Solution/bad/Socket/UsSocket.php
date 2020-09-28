<?php


namespace App\Adapter\Solution\bad\Socket;


class UsSocket implements Socket
{
    private int $pins = 3;
    private int $voltage = 120;

    public function pins()
    {
        return $this->pins;
    }

    public function voltage()
    {
        return $this->voltage;
    }
}