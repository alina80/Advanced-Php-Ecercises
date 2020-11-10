<?php declare(strict_types=1);

class Car
{
    private $make;

    public function __construct(string $make)
    {
        $this->make = $make;
    }

    public function __toString()
    {
        return 'Car make: ' . $this->make;
    }
}
