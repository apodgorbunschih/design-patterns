<?php

namespace App\Strategy\Solution\good\strategies;

use App\Strategy\Locomotion\Car;

class GoToWorkByCarStrategy implements GoToWorkStrategy
{
    public function go(): bool
    {
        try {
            (new Car())->drive("work");
        } catch (\Exception $e) {
            return false;
        }

        return true;
    }

    public function weather()
    {
        return "rain";
    }
}