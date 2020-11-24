<?php declare(strict_types=1);


function createFile(string $name, string $string): void
{
    $fileName = $name . '.txt';
    if (!file_exists($name)){
        $file = fopen($fileName,'w+');
        echo fwrite($file,$string);
    }else{
        echo fwrite($fileName,$string);
    }

}
createFile('Exemplul1', 'Ana are mere.');
createFile('Exemplul1', 'Ana nu mai are mere.');
createFile('Exemplul1', 'Ana are din nou  mere.');