<?php


namespace App\Tests\Strategytests_;


use App\Strategy\Problem\Phone;
use App\Strategy\Solution\bad\Alex;
use PHPUnit\Framework\TestCase;

class Solution1_RoadProblem extends TestCase
{
    public function test_road()
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