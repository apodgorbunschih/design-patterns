<?php


namespace App\Strategy\Solution\ugly\Locomotion;


interface Locomotion
{
    public function move($from, $to);

    public function getWeather();
}