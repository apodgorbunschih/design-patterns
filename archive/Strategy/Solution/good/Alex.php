<?php

namespace App\Strategy\Solution\good;

use App\Strategy\Problem\Phone;

class Alex
{
    private array $ownedStuff = [];

    public function owns($something)
    {
        $this->ownedStuff[get_class($something)] = $something;
    }

    public function weather(): string
    {
        return $this->getPhone()->weather();
    }

    public function goToWork()
    {
        $brainPart = new BrainPartThatIsResponsibleForAnalyzingHowToGoToWork([
            'weather' => true,
            'mood' => true
        ]);
        if(!$brainPart->canIGoToWork()) {
            // Stay home
        }
        $locomotion = $brainPart->whatLocomotionShouldITakeTodayToGoToWork();
        $locomotion->move('currentPosition', 'work');
    }

    private function getPhone(): Phone
    {
        if (!isset($this->ownedStuff[Phone::class])) {
            throw new \RuntimeException("You dont own a phone");
        }

        return $this->ownedStuff[Phone::class];
    }
}