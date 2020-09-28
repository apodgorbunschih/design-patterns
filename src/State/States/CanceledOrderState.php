<?php


namespace App\State\States;


use App\State\Order;

class CanceledOrderState implements OrderState
{
    private Order $order;

    public function __construct(Order $order)
    {
        $this->order = $order;
    }

    public function cancelOrder(Order $order): OrderState
    {
        echo "-> Order was canceled again so we will start a new order". PHP_EOL;
        // Delegate the cancel process for the order
        return new NewOrderState($order);
    }

    public function deliverOrder(Order $order): OrderState
    {

    }

    public function prepareOrder(Order $order): OrderState
    {

    }
}