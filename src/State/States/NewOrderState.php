<?php


namespace App\State\States;


use App\State\Order;

class NewOrderState implements OrderState
{
    private Order $order;

    public function __construct(Order $order)
    {
        $this->order = $order;
    }

    public function cancelOrder(Order $order): OrderState
    {
        // Delegate the cancel process for the order

        echo "-> Order was canceled". PHP_EOL;
        return new CanceledOrderState($order);
    }

    public function deliverOrder(Order $order): OrderState
    {
        echo "-> Pizza is not prepared yet". PHP_EOL;

        return $this;
    }

    public function prepareOrder(Order $order): OrderState
    {
        // Delegate the process of preparing the order
        echo "-> Pizza is in the oven". PHP_EOL;
        return new PendingOrderState($order);
    }
}