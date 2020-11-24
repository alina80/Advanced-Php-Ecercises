<?php

    $xml=file_get_contents('xml/uwm.xml');
    $xmlTag = new XMLReader();
    $xmlTag->xml($xml);
    $arr = [];
    while ($xmlTag->read()) {
        if ($xmlTag->name === 'level'){
            $type = $xmlTag->readInnerXml();
            if (isset($arr[$type])){
                $arr[$type] ++;
            }else{
                $arr[$type] = 1;
            }
        }
    }
    print_r($arr);

