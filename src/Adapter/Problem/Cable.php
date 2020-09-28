<?php

namespace App\Adapter\Problem;

use App\Adapter\Problem\Plug\Plug;

abstract class Cable
{
    abstract public function plug(): Plug;
    abstract public function voltage(): Int;
}