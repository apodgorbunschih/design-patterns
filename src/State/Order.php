<?php


namespace App\State;


use App\State\Problem\Pizza\Pizza;

class Order
{
    public function __construct(string $name, Pizza $pizza)
    {
    }
}