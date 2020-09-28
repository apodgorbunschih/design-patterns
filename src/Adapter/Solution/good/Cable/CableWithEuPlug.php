<?php

namespace App\Adapter\Solution\good\Cable;

use App\Adapter\Solution\good\Cable;
use App\Adapter\Solution\good\Plug\EuPlug;

class CableWithEuPlug extends Cable
{
    private EuPlug $plug;

    public function __construct()
    {
        $this->plug = new EuPlug();
    }

    public function plug(): EuPlug
    {
        return $this->plug;
    }

    public function voltage(): int
    {
        return 220;
    }
}