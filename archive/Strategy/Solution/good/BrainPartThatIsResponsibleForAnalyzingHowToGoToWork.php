<?php


namespace App\Strategy\Solution\good;


use App\Strategy\Solution\good\Locomotion\Locomotion;

class BrainPartThatIsResponsibleForAnalyzingHowToGoToWork
{
    private array $conditions;

    public function __construct($conditions = [])
    {
        $this->conditions = $conditions;
    }

    /** @var array|Locomotion[] */
    private array $canGoToWorkBy = [];

    public function canGoToWorkBy(Locomotion $locomotion)
    {
        $this->canGoToWorkBy[get_class($locomotion)] = $locomotion;
    }

    public function whatLocomotionShouldITakeTodayToGoToWork(): Locomotion
    {

        foreach ()
    }

    public function canIGoToWork(): bool
    {
        //Check if I am able to go to work
    }
}