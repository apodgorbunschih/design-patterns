<?php

namespace App\Strategy\Solution\ugly;

use App\Strategy\Problem\Phone;
use App\Strategy\Solution\ugly\Locomotion\Locomotion;

class Alex
{
    private GoToWorkManager $gotToWorkManager;

    public function __construct()
    {
        $this->gotToWorkManager = new GoToWorkManager();
    }

    private array $ownedStuff = [];

    private array $canGoToWorkBy = [];

    public function owns($something)
    {
        $this->ownedStuff[get_class($something)] = $something;
    }

    public function canGoToWorkBy(Locomotion $locomotion)
    {
        $this->canGoToWorkBy[get_class($locomotion)] = $locomotion;
    }

    public function weather(): string
    {
        return $this->getPhone()->weather();
    }

    public function goToWork($weather)
    {
        $this->gotToWorkManager->
        $locomotion = $this->getCanGoToWorkByWeather($weather);
        $locomotion->move('work', 'home');

    }


    private function getPhone(): Phone
    {
        if (!isset($this->ownedStuff[Phone::class])) {
            throw new \RuntimeException("You dont own a phone");
        }

        return $this->ownedStuff[Phone::class];
    }


    private function getCanGoToWorkByWeather($weather): Locomotion
    {
    }
}