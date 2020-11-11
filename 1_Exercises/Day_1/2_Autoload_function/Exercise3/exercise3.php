<?php

require './vendor/autoload.php';

$kmart = new Kmart('New York');
$target = new Target('Los Angeles');

$drink = new Drink('coca-cola');

echo $kmart;
echo $target;
echo $drink;