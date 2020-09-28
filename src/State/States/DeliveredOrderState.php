<?php


namespace App\State\States;


use App\State\Order;

class DeliveredOrderState implements OrderState
{
    private Order $order;

    public function __construct(Order $order)
    {
        $this->order = $order;
    }

    public function cancelOrder(Order $order): OrderState
    {
    }

    public function deliverOrder(Order $order): OrderState
    {
    }

    public function prepareOrder(Order $order): OrderState
    {
    }
}