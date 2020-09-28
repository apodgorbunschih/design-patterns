<?php


namespace App\Strategy\Locomotion;


interface Locomotion
{
    public function move($from, $to);
}