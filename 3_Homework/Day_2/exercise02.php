<?php declare(strict_types=1);

function circleArea(int $radius): float
{
    return round(pi() * $radius * $radius, 1);
}