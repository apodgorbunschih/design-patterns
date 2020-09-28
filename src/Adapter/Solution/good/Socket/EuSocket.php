<?php


namespace App\Adapter\Solution\good\Socket;


class EuSocket implements Socket
{
    private int $pins = 2;
    private int $voltage = 220;

    public function pins()
    {
        return $this->pins;
    }

    public function voltage()
    {
        return $this->voltage;
    }
}