<?php

namespace App\Adapter\Solution\good;

use App\Adapter\Solution\good\Plug\Plug;

abstract class Cable
{
    abstract public function plug(): Plug;

    abstract public function voltage(): int;
}