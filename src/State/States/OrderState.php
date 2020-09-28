<?php


namespace App\State\States;


use App\State\Order;

interface OrderState
{
    public function cancelOrder(Order $order): OrderState;

    public function deliverOrder(Order $order): OrderState;

    public function prepareOrder(Order $order): OrderState;
}