<?php declare(strict_types=1);

class Account
{
    private $number;

    public function __construct(int $number)
    {
        $this->number = $number;
    }

    public function __toString()
    {
        return 'Numer konta: ' . $this->number;
    }
}
