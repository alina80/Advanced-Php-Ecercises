<?php

namespace Exercise1;

require_once __DIR__ . '/../Interfaces/IntroductionInterface.php';
require_once __DIR__ . '/../Interfaces/HelloInterface.php';


class User1 implements \IntroductionInterface, \HelloInterface
{

    public function sayYourNamespace(): void
    {
        echo 'My Namespace: ' . __NAMESPACE__ . "<br>";
    }

    public function sayYourClass(): void
    {
        echo "My class: " . __CLASS__ . "<br>";
    }

    public function sayHello(): void
    {
        echo "Hello!<br>";
    }
}