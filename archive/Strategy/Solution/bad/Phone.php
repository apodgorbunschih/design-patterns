<?php

namespace App\Strategy\Solution\bad;

class Phone
{
    private array $weather = ["sunny", "cloudy", "rain", "snow"];

    public function weather(): string
    {
        return $this->weather[array_rand($this->weather)];
    }
}