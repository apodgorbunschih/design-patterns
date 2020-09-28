<?php

namespace App\Strategy\Solution\good\Locomotion;

class Walk implements Locomotion
{
    private $currentPosition;

    public function __construct($currentPosition)
    {
        $this->currentPosition = $currentPosition;
    }

    public function walk($to)
    {
    }

    public function move($from, $to)
    {

    }
}