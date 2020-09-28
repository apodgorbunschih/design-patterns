<?php


namespace App\Strategy\Solution\good;


use App\Strategy\Phone;

class Alex
{
    private array $ownedStuff = [];
    private bool $isAtWork;
    private BrainPartThatIsResponsibleForAnalyzingHowToGoToWork $manager;

    public function __construct()
    {
        $this->manager = new BrainPartThatIsResponsibleForAnalyzingHowToGoToWork();
    }

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

    public function goToWork()
    {
        $weather = $this->weather();

        var_dump($weather);

        $this->isAtWork = $this->manager->goToWork($weather);
    }

    public function isAtWork(): bool
    {
        return $this->isAtWork;
    }
}