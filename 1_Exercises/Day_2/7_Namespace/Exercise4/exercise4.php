<?php

$register1 = new src\Account\Register();
$register2 = new src\User\Register();

echo $register1->checkNamespace()."<br>";
echo $register2->checkNamespace();
