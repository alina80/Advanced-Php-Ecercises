<?php declare(strict_types=1);

function showProduct(string $attribute, string $path): array
{
    $readContent = file_get_contents($path);
    $oXMLRead = new XMLReader();
    $oXMLRead->XML($readContent);
    $products = [];
    $i = 0;
    while ($oXMLRead->read()) {
        echo $oXMLRead->name;
        echo $oXMLRead->getAttribute($attribute);
        $products[$i]=$oXMLRead->getAttribute($attribute);
        $i++;
    }
    print_r($products);
    return $products;
}

$path = './products.xml';
showProduct('id',$path);