<?php

function loadClasses($className)
{
    require_once './' . $className . '.php';
}
spl_autoload_register('loadClasses');

$account = new Account(223344);
$user = new User('Php User');

echo $account;
echo $user;