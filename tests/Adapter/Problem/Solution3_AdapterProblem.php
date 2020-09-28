<?php


namespace App\Tests\Adapter\Problem;


use App\Adapter\Solution\good\Alex;
use App\Adapter\Solution\good\Cable\CableWithEuPlug;
use App\Adapter\Solution\good\Laptop;
use PHPUnit\Framework\TestCase;

class Solution3_AdapterProblem extends TestCase
{
    private Alex $alex;
    private Laptop $laptop;

    protected function setUp(): void
    {
        $this->alex = new Alex();
        $this->laptop = new Laptop(new CableWithEuPlug());
    }

    public function test_Alex_damaging_computer()
    {
        $this->alex->owns($this->laptop);
        $this->alex->isInEu();
        $this->alex->connectsLaptopToTheSocket();

        $this->laptop->powerOn();

        self::assertTrue($this->laptop->isOn());
    }
}