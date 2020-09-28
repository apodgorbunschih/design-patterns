<?php

namespace App\Adapter\Problem;

use App\Adapter\Problem\Socket\EuSocket;
use App\Adapter\Problem\Socket\UsSocket;

class Alex
{
    private $ownedStuff = [];

    private $location;

    public function owns($something)
    {
        $this->ownedStuff[get_class($something)] = $something;
    }

    public function isInUsa()
    {
        $this->location = 'usa';
    }

    public function isInEu()
    {
        $this->location = 'eu';
    }

    public function connectsLaptopToTheSocket()
    {
        if (!isset($this->ownedStuff[Laptop::class])) {
            throw new \RuntimeException("You dont own a laptop");
        }

        /** @var Laptop $laptop */
        $laptop = $this->ownedStuff[Laptop::class];

        $socket = $this->getSocketTypeByLocation();

        $laptop->connectToSocket($socket);
    }

    private function getSocketTypeByLocation()
    {
        if($this->location == 'eu') {
            return new EuSocket();
        }

        if($this->location == 'usa') {
            return new UsSocket();
        }

        throw new \RuntimeException();
    }
}