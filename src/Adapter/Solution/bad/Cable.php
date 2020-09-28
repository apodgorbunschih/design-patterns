<?php

namespace App\Adapter\Solution\bad;

use App\Adapter\Solution\bad\Plug\Plug;

abstract class Cable
{
    abstract public function plug(): Plug;
    abstract public function voltage(): Int;
}