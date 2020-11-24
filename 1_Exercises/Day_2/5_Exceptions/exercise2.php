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
    $count1 = 0;
    $count2 = 0;
    for ($n = 0; $n < $tryNumber; $n++) {

        try {
            divide(mt_rand(-20, 20), rand(-10, 10)) . '</br>';
        }catch (Exception $e){
            $count1 ++;
            echo "Message: " . $e->getMessage() . "<br>";

        }catch (OutOfRangeException $o){
            $count2 ++;
            echo "Message: " . $o->getMessage() . "<br>";

        }

    }
    echo "First exception occurred " . $count1 . " times!<br>";
    echo "Second exception occurred " . $count2 . " times!<br>";
}

randomDivide(7);

