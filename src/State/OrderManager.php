<?php

namespace App\State;

use App\State\Problem\Pizza\Pizza;
use App\State\States\NewOrderState;
use App\State\States\OrderState;

class OrderManager
{
    private OrderState $state;

    public function createOrder($name, Pizza $pizza)
    {

        $order = new Order($name, $pizza);
        $this->state = new NewOrderState($order);

        echo "-> Order was created" .PHP_EOL;
        return $order;
    }

    public function cancelOrder(Order $order)
    {
        $this->state = $this->state->cancelOrder($order);
    }

    public function prepareOrder(Order $order)
    {
        $this->state = $this->state->prepareOrder($order);
    }

    public function deliverOrder(Order $order)
    {
        $this->state = $this->state->deliverOrder($order);
    }

}