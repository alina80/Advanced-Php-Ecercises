<?php

namespace Exercise1\User;

require_once __DIR__ . "/../../Interfaces/IntroductionInterface.php";
require_once __DIR__ . "/../../Interfaces/WatchInterface.php";

use \IntroductionInterface;
use \WatchInterface;

class Watcher implements IntroductionInterface, WatchInterface
{

    public function sayYourNamespace(): void
    {
        echo 'My Namespace: ' . __NAMESPACE__ . "<br>";
    }

    public function sayYourClass(): void
    {
        echo "My class: " . __CLASS__ . "<br>";
    }

    public function watch(): void
    {
        echo "Watching..";
    }
}