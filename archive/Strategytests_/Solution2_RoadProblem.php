<?php


namespace App\Tests\Strategytests_;


use App\Strategy\Problem\Phone;
use App\Strategy\Solution\ugly\Alex;
use App\Strategy\Solution\ugly\Locomotion\Bicycle;
use App\Strategy\Solution\ugly\Locomotion\Car;
use App\Strategy\Solution\ugly\Locomotion\Walk;
use PHPUnit\Framework\TestCase;

class Solution2_RoadProblem extends TestCase
{
    public function test_road()
    {
        $alex = new Alex();

        $alex->owns(new Phone());

        $alex->canGoToWorkBy(new Car());
        $alex->canGoToWorkBy(new Bicycle());
        $alex->canGoToWorkBy(new Walk());

        $weather = $alex->weather();

        var_dump("Today weather is -> " . $weather);



        $alex->goToWork($weather);

        var_dump($alex->isAtWork());

        self::assertTrue(true);

    }
}