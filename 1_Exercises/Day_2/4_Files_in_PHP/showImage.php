<?php

    if(isset($_GET['image']) && isset($_GET['date'])){
        $file = $_GET['image'];
        $hash = md5($file);

        $mainDir = __DIR__ . "/" . $_GET['date'];

        $firstSubDir = $mainDir . "/" . substr($hash,0,2);
        $secondSubDir = $firstSubDir . "/" . substr($hash,-2,2);
        $path = $secondSubDir . '/' . $file;
        if (file_exists($path)){
            $img = fopen($path,'r');
            header('Content-type:image.png');
            fpassthru($img);
            echo 'Yes';
        }else{
            echo 'No';
        }
    }