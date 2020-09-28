<?php

namespace App\Strategy\Solution\good\strategies;

use App\Strategy\Locomotion\Bicycle;
use App\Strategy\Locomotion\Car;

class GoToWorkByBicycleStrategy implements GoToWorkStrategy
{
    public function go(): bool
    {
        try {
            (new Bicycle())->ride("work");
        } catch (\Exception $e) {
            return false;
        }

        return true;
    }

    public function weather()
    {
        return "cloudy";
    }
}