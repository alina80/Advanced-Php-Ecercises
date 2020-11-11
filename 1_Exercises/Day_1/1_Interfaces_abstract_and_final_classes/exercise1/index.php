<?php

require_once './Client.php';

$client = new Client();

$client->setLogin('Client1');
$client->setPassword('12345678');
$client->setAge(21);
echo $client->login('Client1', '12345678') ? 'Logged in' : 'Not authenticated!';