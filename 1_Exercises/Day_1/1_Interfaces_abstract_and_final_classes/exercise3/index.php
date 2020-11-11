<?php

require_once __DIR__ . '/StandardUrl.php';

$standardUrl = new StandardUrl($_SERVER['REQUEST_URI']);
echo $standardUrl->getParam('b');