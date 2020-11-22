<?php

function emailAliases(string $email) : array
{
    $aliasesArray = [];
    $aliasesArray[] = substr(explode('@',$email)[0],0,1) . '.' . explode('.',explode('@',$email)[0])[1] . "@";
    $aliasesArray[] = explode('.',explode('@',$email)[0])[1] . '@';
    $aliasesArray[] = "@" . explode('.',explode('@', $email)[1])[0] . '.' . explode('.',explode('@', $email)[1])[2];
    $aliasesArray[] = "@" . 'mail.' . explode('.',explode('@', $email)[1])[0] . '.' . explode('.',explode('@', $email)[1])[2];

    return $aliasesArray;
}

echo implode(',', emailAliases('john.kovalsky@coderslab.com.pl'));