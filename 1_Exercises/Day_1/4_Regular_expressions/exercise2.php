<?php

function findCitations(string $text) : array
{
    $arr[] = preg_match_all('/"([a-zA-Z0-9 ]+)"/',$text,$matches);
    return $matches;
}

$citeArray = findCitations('This is some text. "This is quotation1". The text continues. "This is a second quotation".');
print_r($citeArray);//["This is quotation1", "This is a second quotation"]

