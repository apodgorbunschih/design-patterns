<?php

namespace App\Strategy\Solution\good\Locomotion;

class Bicycle implements Locomotion
{
    private $currentPosition;

    public function __construct($currentPosition)
    {
        $this->currentPosition = $currentPosition;
    }

    public function ride($to)
    {

    }

    public function move($from, $to)
    {

    }
}