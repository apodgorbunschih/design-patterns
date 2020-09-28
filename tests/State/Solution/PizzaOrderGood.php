<?php


namespace App\Tests\State\Solution;


use App\State\OrderManager;
use App\State\Problem\Pizza\MargheritaPizza;
use PHPUnit\Framework\TestCase;

class PizzaOrderGood extends TestCase
{
    public function testOrderPizza()
    {
        $manager = new OrderManager();

        $order = $manager->createOrder("Alex", new MargheritaPizza());
        $manager->cancelOrder($order);
        $manager->cancelOrder($order);
        $manager->prepareOrder($order);
        $manager->cancelOrder($order);
        $manager->deliverOrder($order);


        self::assertTrue(true);
    }
}