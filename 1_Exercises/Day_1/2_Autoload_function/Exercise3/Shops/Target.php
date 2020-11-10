<?php declare(strict_types=1);

class Target
{
    private $city;

    public function __construct(string $city)
    {
        $this->city = $city;
    }

    public function __toString()
    {
        return 'Target is located in: ' . $this->city;
    }
}
