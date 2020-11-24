<?php declare(strict_types=1);

function circleArea(int $radius): float
{
    if ($radius > 0){
        $result = round(pi() * $radius * $radius, 1);
    }else{
        throw new Exception('Incorrect number!');
    }

    return $result;
}

function handleRequest(int $rad){
    try {
        $result = circleArea($rad);
    }catch (Exception $e){
        echo $e->getMessage() . " " . $rad;
    }
    return $result;
}
echo handleRequest(9);
echo "<br>";
echo handleRequest(-5);
