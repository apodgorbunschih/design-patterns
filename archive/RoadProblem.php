<?php


namespace App\Tests\Strategytests_;


use App\Strategy\Problem\Alex;
use App\Strategy\Problem\Phone;
use PHPUnit\Framework\TestCase;

class RoadProblem extends TestCase
{
    public function test_road()
    {
        $alex = new Alex();

        $alex->goToWork();

        $alex->isAtWork();
    }
}