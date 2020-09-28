<?php

namespace App\Strategy\Solution\good\strategies;

use App\Strategy\Locomotion\Walk;

class GoToWorkByWalkStrategy implements GoToWorkStrategy
{
    public function go(): bool
    {
        try {
            (new Walk())->walk("work");
        } catch (\Exception $e) {
            return false;
        }

        return true;
    }

    public function weather()
    {
        return "sunny";
    }
}