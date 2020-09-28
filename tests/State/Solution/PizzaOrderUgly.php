<?php


namespace App\Tests\State\Solution;


use App\State\Problem\Pizza\MargheritaPizza;
use App\State\Solution\ugly\OrderManager;
use PHPUnit\Framework\TestCase;

class PizzaOrderUgly extends TestCase
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
        $manager->cancelOrder($order);


        self::assertTrue(true);
    }
}