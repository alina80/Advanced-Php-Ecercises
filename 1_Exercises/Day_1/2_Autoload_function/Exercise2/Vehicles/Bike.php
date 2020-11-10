<?php declare(strict_types=1);

class Bike
{
    private $make;

    public function __construct(string $make)
    {
        $this->make = $make;
    }

    public function __toString()
    {
        return 'Bike make: ' . $this->make;
    }
}