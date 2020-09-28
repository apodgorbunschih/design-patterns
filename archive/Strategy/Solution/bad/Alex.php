<?php

namespace App\Strategy\Solution\bad;

use App\Strategy\Problem\Phone;
use App\Strategy\Solution\bad\Locomotion\Bicycle;
use App\Strategy\Solution\bad\Locomotion\Car;
use App\Strategy\Solution\bad\Locomotion\Walk;

class Alex
{
    private array $ownedStuff = [];
    private bool $isAtWork;

    public function owns($something)
    {
        $this->ownedStuff[get_class($something)] = $something;
    }

    private function getPhone(): Phone
    {
        if (!isset($this->ownedStuff[Phone::class])) {
            throw new \RuntimeException("You dont own a phone");
        }

        return $this->ownedStuff[Phone::class];
    }

    public function weather(): string
    {
        return $this->getPhone()->weather();
    }

    public function goToWork($weather)
    {
        if ($weather == "sunny") {
            (new Walk("home"))->walk("work");
            $this->isAtWork = true;
        } elseif ($weather == "cloudy") {
            (new Bicycle("home"))->ride("work");
            $this->isAtWork = true;
        } elseif ($weather == "rain") {
            (new Car("home"))->drive("work");
            $this->isAtWork = true;
        } else {
            $this->isAtWork = false;
        }
    }

    public function isAtWork()
    {
        return $this->isAtWork;
    }
}