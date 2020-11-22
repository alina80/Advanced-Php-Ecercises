<?php

function regexCheckPassword(string $password): bool
{
    return preg_match("/^.*(?=.{10,15})(?=.*[a-z]+)(?=.*[A-Z]+)(?=.*[0-9]).*$/",$password);
}

var_dump(regexCheckPassword('abc'));//false
var_dump(regexCheckPassword('abcdefghijklmnop'));//false
var_dump(regexCheckPassword('abCdeFghijklmnop'));//false
var_dump(regexCheckPassword('aBp6oCkDmTgGgG'));//true
var_dump(regexCheckPassword('aB3pLoCkDmTgGgG'));//true