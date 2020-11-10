<?php declare(strict_types=1);

class Drink
{
    private $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function __toString()
    {
        return 'Drink: ' . $this->name;
    }
}
