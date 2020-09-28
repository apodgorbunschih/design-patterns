<?php


namespace App\Tests\Strategy\Problem;


use App\Strategy\Phone;
use App\Strategy\Solution\bad\Alex;
use PHPUnit\Framework\TestCase;

class RoadBadSolution extends TestCase
{
    public function testGoToWork()
    {
        $alex = new Alex();
        $alex->owns(new Phone());
        $weather = $alex->weather();

        var_dump("Today weather is -> " . $weather);

        $alex->goToWork($weather);

        var_dump($alex->isAtWork());

        self::assertTrue(true);
    }
}