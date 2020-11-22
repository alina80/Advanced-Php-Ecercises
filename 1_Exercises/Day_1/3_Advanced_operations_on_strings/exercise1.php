<?php

function function1(string $email) : string
{
    $data = explode('@', $email);
    $name = ucfirst(explode('.', $data[0])[0]);
    $surname = ucfirst(explode('.',$data[0])[1]);

    return $name . ' ' . $surname;
}

function function2(string $email) : string
{
    $data = explode('@', $email);
    $company = ucfirst(explode('.', $data[1])[0]);
    $surname = ucfirst(explode('.',$data[0])[1]);

    return $company . ' ' . $surname;
}

function function3(string $email) : string
{
    $data = explode('@', $email);
    $n = substr(ucfirst(explode('.', $data[0])[0]),0,1);
    $s = substr(ucfirst(explode('.',$data[0])[1]),0,1);

    return $n . '.' . $s . '.';
}

echo function1('john.snow@company.com.pl') . "<br>";//John Snow
echo function2('john.snow@company.com.pl') . "<br>";//Company Snow
echo function3('john.snow@company.com.pl') . "<br>";//J.S.