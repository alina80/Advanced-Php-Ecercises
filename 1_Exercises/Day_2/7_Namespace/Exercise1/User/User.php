<?php

namespace Exercise1\User;

require_once __DIR__ . '/../../Interfaces/IntroductionInterface.php';
require_once __DIR__ . '/../../Interfaces/GoodbyeInterface.php';

use \GoodbyeInterface;
use \IntroductionInterface;

class User implements IntroductionInterface, GoodbyeInterface
{

    public function sayGoodbye(): void
    {
        echo "Goodbye!<br>";
    }

    public function sayYourNamespace(): void
    {
        echo 'My Namespace: ' . __NAMESPACE__ . "<br>";
    }

    public function sayYourClass(): void
    {
        echo "My class: " . __CLASS__ . "<br>";
    }
}