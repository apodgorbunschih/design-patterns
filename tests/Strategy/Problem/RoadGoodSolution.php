<?php

namespace App\Tests\Strategy\Problem;

use App\Strategy\Phone;
use App\Strategy\Solution\good\Alex;
use PHPUnit\Framework\TestCase;

class RoadGoodSolution extends TestCase
{
    public function testGoToWork()
    {
        $alex = new Alex();
        $alex->owns(new Phone());
        $alex->goToWork();
        var_dump($alex->isAtWork());

        self::assertTrue(true);
    }
}