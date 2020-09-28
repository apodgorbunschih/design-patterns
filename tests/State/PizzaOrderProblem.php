<?php

namespace App\Tests\State;

use App\State\Problem\Alex;
use App\State\Problem\Pizza\MargheritaPizza;
use App\State\Problem\Pizzeria;
use PHPUnit\Framework\TestCase;

class PizzaOrderProblem extends TestCase
{
    public function testDeliverOrder()
    {
        $alex = new Alex();

        $newAwesomePizzeria = new Pizzeria();

        $order1 = $newAwesomePizzeria->createOrder($alex, new MargheritaPizza());

        $order2 = $newAwesomePizzeria->cancelOrder($order1);

        $order1 = $newAwesomePizzeria->cancelOrder($order2);

        $newAwesomePizzeria->deliver($order1);

        $newAwesomePizzeria->cancelOrder($order1);
    }
}