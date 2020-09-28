<?php


namespace App\Adapter\Solution\ugly\Cable;


use App\Adapter\Solution\ugly\Cable;
use App\Adapter\Solution\ugly\Plug\EuPlug;
use App\Adapter\Solution\ugly\Plug\Plug;

class CableAdapterUsToEu extends Cable
{
    /**
     * @var CableWithUsPlug
     */
    private CableWithUsPlug $cableWithUsPlug;

    public function __construct(CableWithUsPlug $cableWithUsPlug)
    {
        $this->cableWithUsPlug = $cableWithUsPlug;
    }

    public function plug(): Plug
    {
        return new EuPlug();
    }

    public function voltage(): int
    {
        return 220;
    }

    public function lengthOfCable()
    {
//        $this->cableWithUsPlug->length() + adapter
    }
}