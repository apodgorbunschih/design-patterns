<?php


namespace App\Strategy\Solution\good\GoToWork;


use App\Strategy\Solution\good\Locomotion\Car;

class GoToWorkByCar
{
    public function goToWork(array $conditions)
    {
        if ($this->conditionsMatches($conditions)) {
            return (new Car())->drive('work');
        }

    }

    private function conditionsMatches($conditions): bool
    {
        if(isset($conditions['weather'])) {
            if($conditions['weather'] === $this->conditionsInOrderToGoByCar()['weather']) {
                return true;
            }
        }
    }


    private function conditionsInOrderToGoByCar()
    {
        return [
            'weather' => 'sunny'
        ];
    }

}