<?php


namespace App\State\States;


use App\State\Order;

class PendingOrderState implements OrderState
{
    private Order $order;

    public function __construct(Order $order)
    {
        $this->order = $order;
    }

    public function cancelOrder(Order $order): OrderState
    {
        echo "-> The order can't be canceled anymore" . PHP_EOL;

        return $this;
    }

    public function deliverOrder(Order $order): OrderState
    {
        echo "-> Pizza is delivered" . PHP_EOL;
        // Delegate the delivery of the pizza
        return new DeliveredOrderState($order);
    }

    public function prepareOrder(Order $order): OrderState
    {

    }
}