<?php


namespace App\Strategy\Solution\good;


use App\Strategy\Solution\good\strategies\GoToWorkByBicycleStrategy;
use App\Strategy\Solution\good\strategies\GoToWorkByCarStrategy;
use App\Strategy\Solution\good\strategies\GoToWorkByWalkStrategy;
use App\Strategy\Solution\good\strategies\GoToWorkStrategy;

class BrainPartThatIsResponsibleForAnalyzingHowToGoToWork
{
    /**
     * @var array | GoToWorkStrategy[]
     */
    private array $strategies;

    public function __construct()
    {
        $this->strategies = [
            new GoToWorkByWalkStrategy(),
            new GoToWorkByBicycleStrategy(),
            new GoToWorkByCarStrategy()
        ];
    }

    public function goToWork(string $weather)
    {
        foreach ($this->strategies as $strategy) {
            if($strategy->weather() == $weather) {
                return $strategy->go();
            }
        }

        return false;
    }
}