<?php

namespace App\Adapter\Solution\ugly\Cable;

use App\Adapter\Solution\ugly\Cable;
use App\Adapter\Solution\ugly\Plug\UsPlug;

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
        return 120;
    }
}