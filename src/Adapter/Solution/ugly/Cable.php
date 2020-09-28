<?php

namespace App\Adapter\Solution\ugly;

use App\Adapter\Solution\ugly\Plug\Plug;

abstract class Cable
{
    abstract public function plug(): Plug;
    abstract public function voltage(): Int;
}