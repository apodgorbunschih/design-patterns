<?php

namespace App\Strategy2;

class Alex
{
    public function goToWork()
    {
        $locomotion = $this->manager->howCanIgetToWork();

        $locomotion->move('home', 'work');
    }
}