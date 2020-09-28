<?php

namespace App\Adapter\Problem\Cable;

use App\Adapter\Problem\Cable;
use App\Adapter\Problem\Plug\UsPlug;

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