<?php


namespace App\Tests\Adapter\Problem;


use App\Adapter\Solution\ugly\Alex;
use App\Adapter\Solution\ugly\Cable\CableWithUsPlug;
use App\Adapter\Solution\ugly\Cable\CableAdapterUsToEu;
use App\Adapter\Solution\ugly\Laptop;
use PHPUnit\Framework\TestCase;

class Solution2_AdapterProblem extends TestCase
{
    private Alex $alex;
    private Laptop $laptop;

    protected function setUp(): void
    {
        $this->alex = new Alex();
        $this->laptop = new Laptop(new CableAdapterUsToEu(new CableWithUsPlug()));
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