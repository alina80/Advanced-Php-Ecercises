<?php

function cleanString(string $text) : string
{
    return preg_replace('/[^\w\s]/','',$text);
}

print_r(cleanString('Single_Page*45(wow'));//Single_Page45wow
echo "<br>";
print_r(cleanString('Is_thisStringCorrect'));//Is_thisStringCorrect
echo "<br>";
print_r(cleanString('Another$%^&Wrong*6789String_____'));//AnotherWrong6789String_____

