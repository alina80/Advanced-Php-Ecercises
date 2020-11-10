<?php declare(strict_types=1);

class Kmart
{
    private $city;

    public function __construct(string $city)
    {
        $this->city = $city;
    }

    public function __toString()
    {
        return 'Kmart is located in: ' . $this->city;
    }
}
