<?php


namespace App\State\Solution\ugly;


use App\State\Problem\Pizza\Pizza;

class Order
{
    const ORDER_STATUS_NEW = 1;
    const ORDER_STATUS_CANCELED = 2;
    const ORDER_STATUS_PENDING = 3;
    const ORDER_STATUS_DELIVERED = 4;

    private $status;

    public function __construct(string $name, Pizza $pizza)
    {
        $this->status = self::ORDER_STATUS_NEW;
    }

    public function isNew(): bool
    {
        return $this->status === self::ORDER_STATUS_NEW;
    }

    public function isCanceled()
    {
        return $this->status === self::ORDER_STATUS_CANCELED;
    }

    public function isPrepared()
    {
        return $this->status === self::ORDER_STATUS_PENDING;
    }

    public function cancel()
    {
        $this->status = self::ORDER_STATUS_CANCELED;
    }

    public function prepared()
    {
        $this->status = self::ORDER_STATUS_PENDING;
    }

    public function new()
    {
        $this->status = self::ORDER_STATUS_NEW;
    }


}