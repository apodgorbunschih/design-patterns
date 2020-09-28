<?php


namespace App\Tests\Strategytests_;


use App\Strategy\Problem\Phone;
use App\Strategy\Solution\good\Alex;
use App\Strategy\Solution\good\BrainPartThatIsResponsibleForAnalyzingHowToGoToWork;
use App\Strategy\Solution\good\Locomotion\Bicycle;
use App\Strategy\Solution\good\Locomotion\Car;
use App\Strategy\Solution\good\Locomotion\Walk;
use PHPUnit\Framework\TestCase;

class Solution3_RoadProblem extends TestCase
{
    public function test_road()
    {
        $alex = new Alex();
        $alex->goToWork();
    }
}