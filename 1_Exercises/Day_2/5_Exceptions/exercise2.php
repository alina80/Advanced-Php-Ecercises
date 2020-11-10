<?php declare(strict_types=1);

function divide(int $divider, int $dividend): float
{
    if ($divider == 0) {
        throw new InvalidArgumentException("Dividing by zero");
    }

    if ($divider < 0) {
        throw new OutOfRangeException ("Divider is lower than zero");
    }

    return $dividend / $divider;
}

function randomDivide(int $tryNumber): void
{
    for ($n = 0; $n < $tryNumber; $n++) {
        echo divide(mt_rand(0, 20) === 0 ? 0 : 5, rand(-10, 10)) . '</br>';
    }
}
