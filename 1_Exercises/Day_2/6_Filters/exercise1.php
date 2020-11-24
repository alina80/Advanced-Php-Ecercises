<?php

function validateAddresses(array $array) : array{
    $validateArray = [];
    $validateArray[0] = filter_var($array[0], FILTER_VALIDATE_EMAIL);
    $validateArray[1] = filter_var($array[1], FILTER_VALIDATE_URL);
    $validateArray[2] = filter_var($array[2], FILTER_VALIDATE_IP);

    return $validateArray;
}

$arrayWithAddr = ['john.kovalsky@gmail.com', 'http://www.coderslab.pl', '192.168.290.4'];
var_dump(validateAddresses($arrayWithAddr));