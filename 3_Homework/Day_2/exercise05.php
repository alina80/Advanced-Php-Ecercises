<?php declare(strict_types=1);

function showProduct(string $attribute, string $path): array
{
    $readContent = file_get_contents($path);
    $oXMLRead = new XMLReader();
    $oXMLRead->XML($readContent);

    while ($oXMLRead->read()) {

    }
}
