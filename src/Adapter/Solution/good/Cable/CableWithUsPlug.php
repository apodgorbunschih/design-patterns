<?php

namespace App\Adapter\Solution\good\Cable;

use App\Adapter\Solution\good\Cable;
use App\Adapter\Solution\good\Plug\UsPlug;

class CableWithUsPlug extends Cable
{
    private UsPlug $plug;

    public function __construct()
    {
        $this->plug = new UsPlug();
    }

    public function plug(): UsPlug
    {
        return $this->plug;
    }

    public function voltage(): int
    {
        return 240;
    }
}