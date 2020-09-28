<?php


namespace App\Strategy\Solution\bad;


use App\Strategy\Locomotion\Bicycle;
use App\Strategy\Locomotion\Car;
use App\Strategy\Locomotion\Walk;
use App\Strategy\Phone;

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

    public function goToWork(string $weather)
    {
        if ($weather == "sunny") {
            (new Walk())->walk("work");
            $this->isAtWork = true;
        } elseif ($weather == "cloudy") {
            (new Bicycle())->ride("work");
            $this->isAtWork = true;
        } elseif ($weather == "rain") {
            (new Car())->drive("work");
            $this->isAtWork = true;
        } else {
            $this->isAtWork = false;
        }
    }

    public function isAtWork(): bool
    {
        return $this->isAtWork;
    }
}