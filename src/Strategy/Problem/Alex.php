<?php


namespace App\Strategy\Problem;


use App\Strategy\Phone;

class Alex
{
    private array $ownedStuff = [];
    private bool $isAtWork;

    public function owns($something)
    {
        $this->ownedStuff[get_class($something)] = $something;
    }

    private function getPhone(): Phone
    {
        if (!isset($this->ownedStuff[Phone::class])) {
            throw new \RuntimeException("You dont own a phone");
        }

        return $this->ownedStuff[Phone::class];
    }

    public function weather(): string
    {
        return $this->getPhone()->weather();
    }

    public function goToWork(string $weather)
    {
    }

    public function isAtWork(): bool
    {
        return false;
    }
}