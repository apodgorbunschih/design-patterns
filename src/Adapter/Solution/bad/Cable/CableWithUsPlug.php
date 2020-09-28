<?php

namespace App\Adapter\Solution\bad\Cable;

use App\Adapter\Solution\bad\Cable;
use App\Adapter\Solution\bad\Plug\EuPlug;
use App\Adapter\Solution\bad\Plug\UsPlug;

class CableWithUsPlug extends Cable
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
//
//    private UsPlug $plug;
//
//    public function __construct()
//    {
//        $this->plug = new UsPlug();
//    }
//
//    public function plug(): UsPlug
//    {
//        return $this->plug;
//    }
//
//    public function voltage(): int
//    {
//        return 120;
//    }
}