<?php


namespace App\Tests\Adapter\Problem;


use App\Adapter\Problem\Alex;
use App\Adapter\Problem\Cable\CableWithUsPlug;
use App\Adapter\Problem\Laptop;
use PHPUnit\Framework\TestCase;

class AdapterProblem extends TestCase
{
    private Alex $alex;
    private Laptop $laptop;

    protected function setUp(): void
    {
        $this->alex = new Alex();
        $this->laptop = new Laptop(new CableWithUsPlug());
    }

    public function test_Alex_Is_In_US_And_The_Laptop_Will_Be_On()
    {
        $this->alex->owns($this->laptop);
        $this->alex->isInUsa();
        $this->alex->connectsLaptopToTheSocket();

        $this->laptop->powerOn();

        self::assertTrue($this->laptop->isOn());
    }


    public function test_Alex_Is_In_EU_And_The_Laptop_Will_Be_Off()
    {
//        self::expectException(\RuntimeException::class);
//        self::expectExceptionMessage("Different number of pins");

        $this->alex->owns($this->laptop);
        $this->alex->isInEu();
        $this->alex->connectsLaptopToTheSocket();

        $this->laptop->powerOn();

        self::assertTrue($this->laptop->isOn());
    }
}