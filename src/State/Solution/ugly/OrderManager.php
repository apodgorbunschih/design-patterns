<?php

namespace App\State\Solution\ugly;

use App\State\Problem\Pizza\Pizza;

class OrderManager
{
    public function createOrder($name, Pizza $pizza)
    {
        $order = new Order($name, $pizza);

        echo "-> Order was created" . PHP_EOL;
        return $order;
    }

    public function cancelOrder(Order $order)
    {
        if ($order->isNew()) {
            // Delegate the cancel process for the order
            echo "-> Order was canceled" . PHP_EOL;
            $order->cancel();
            return;
        }

        if ($order->isCanceled()) {
            echo "-> Order was canceled again so we will start a new order" . PHP_EOL;
            // Delegate the cancel process for the order
            $order->new();
            return;
        }

        echo "-> The order can't be canceled anymore" . PHP_EOL;
    }

    public function prepareOrder(Order $order)
    {
        if ($order->isNew()) {
            // Delegate the process of preparing the order
            echo "-> Pizza is in the oven" . PHP_EOL;
            $order->prepared();
        }
    }

    public function deliverOrder(Order $order)
    {
        if ($order->isPrepared()) {
            // Delegate the delivery of the pizza
            echo "-> Pizza is delivered" . PHP_EOL;
//            $order->deliverd();
        }

    }
}