<?php declare(strict_types=1);

function whatVariable(string $variable): string
{
    if (filter_var($variable,FILTER_VALIDATE_EMAIL) == preg_match('[@,]',$variable,$match)){
        echo filter_var($variable,FILTER_VALIDATE_EMAIL);
        return strtolower($variable);
    }elseif (filter_var($variable,FILTER_VALIDATE_IP) == preg_match('[192,]',$variable,$match)){
        echo filter_var($variable,FILTER_VALIDATE_IP);
        return $variable;
    }elseif (filter_var($variable,FILTER_VALIDATE_URL) == preg_match('[http,]',$variable,$match)){
        echo filter_var($variable,FILTER_VALIDATE_URL);
        return $variable;
    }else {
        echo 'Incorect Input';
        return 'Incorect Input';
    }
}

$a = 'abc@test.ro';
$b = '192.376.874.6.4';
$c = 'http://google.ro';
$d = 'some text';
echo whatVariable($a);
echo "<br>";
echo whatVariable($b);
echo "<br>";
echo whatVariable($c);
echo "<br>";
echo whatVariable($d);
echo "<br>";